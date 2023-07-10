<?php
    /*
     * This file is part of the Ekino Wordpress package.
     *
     * (c) 2013 Ekino
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */

    namespace Ekino\WordpressBundle\Controller;
    use Ekino\WordpressBundle\Wordpress\Wordpress;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\DependencyInjection\ContainerInterface;
    /**
     * Class WordpressController.
     *
     * This is the controller to render Wordpress content
     *
     * @author Vincent Composieux <composieux@ekino.com>
     */
    class WordpressController
    {
        private $wordpress;

        public function __construct(Wordpress $wordpress)
        {
            $this->wordpress = $wordpress;
        }
        /**
         * Wordpress catch-all route action.
         *
         * @return \Ekino\WordpressBundle\Wordpress\WordpressResponse
         */
        public function catchAllAction()
        {
            return $this->wordpress->initialize()->getResponse();
        }

        /**
         * Returns Wordpress service.
         *
         * @return \Ekino\WordpressBundle\Wordpress\Wordpress
         */
        protected function getWordpress()
        {
            return $this->container->get('ekino.wordpress.wordpress');
        }
    }
