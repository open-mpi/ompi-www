<?
$subject_val = "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:41:53 2011" -->
<!-- isoreceived="20110107154153" -->
<!-- sent="Fri, 07 Jan 2011 16:41:46 +0100" -->
<!-- isosent="20110107154146" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name" -->
<!-- id="4D27343A.30405_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="88116BBC-61E3-4F5F-B0C6-B3322B6E0E13_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bernard.secher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15312.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15320.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15320.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
srv = 0 is set in my main program
<br>
I call Bcast because all the processes must call MPI_Comm_accept 
<br>
(collective) or must call MPI_Comm_connect (collective)
<br>
<p>Anyway, I get also a dead lock with your lookup program:
<br>
<p>That's what I do:
<br>
<p>ompi-server -r URIfile
<br>
<p>mpirun -np 1 -ompi-server file:URIfile lookup&amp; (it the program which 
<br>
publish the name)
<br>
mpirun -np 1 -ompi-server file:URIfile lookup (it is the program which 
<br>
lookup the name)
<br>
<p>&nbsp;From these two programs I create a global communicator to exchange 
<br>
communications between the two others
<br>
<p>Best
<br>
Bernard
<br>
<p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; You're calling bcast with root=0, so whatever value rank 0 has for srv, everyone will have after the bcast.  Plus, I didn't see in your code where *srv was ever set to 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my runs, rank 0 is usually the one that publishes first.  Everyone then gets the lookup properly, and then the bcast sends srv=1 to everyone.  They all then try to call MPI_Comm_accept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your code was incomplete, so I had to extend it; see attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a sample output with 8 procs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [7:12] svbu-mpi:~/mpi % mpicc lookup.c -o lookup -g &amp;&amp; mpirun lookup
</span><br>
<span class="quotelev1">&gt; [0] Publish name
</span><br>
<span class="quotelev1">&gt; [0] service ocean available at 3853516800.0;tcp://172.29.218.140:36685;tcp://10.10.10.140:36685;tcp://10.10.20.140:36685;tcp://10.10.30.140:36685;tcp://172.16.68.1:36685;tcp://172.16.29.1:36685+3853516801.0;tcp://172.29.218.150:34210;tcp://10.10.30.150:34210:300
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; [2] Lookup name
</span><br>
<span class="quotelev1">&gt; [6] Lookup name
</span><br>
<span class="quotelev1">&gt; [4] Lookup name
</span><br>
<span class="quotelev1">&gt; [3] Lookup name
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name succeeded
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; [1] Lookup name
</span><br>
<span class="quotelev1">&gt; [7] Lookup name
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name succeeded
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name succeeded
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; [5] Lookup name
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name succeeded
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name succeeded
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name succeeded
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name succeeded
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; Bcast complete: srv=1
</span><br>
<span class="quotelev1">&gt; Server calling MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; [hang -- because everyone's in accept, not connect]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 7, 2011, at 4:17 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only the processes of the program where process 0 successed to publish name, have srv=1 and then call MPI_Comm_accept.
</span><br>
<span class="quotelev2">&gt;&gt; The processes of the program where process 0 failed to publish name, have srv=0 and then call MPI_Comm_connect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's worked like this with openmpi 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it different whith openmpi 1.5.1 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 5, 2011, at 10:36 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm remoteConnect(int myrank, int *srv, char *port_name, char* service)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int clt=0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Request request; /* requete pour communication non bloquante */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm gcom;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Status status; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   char   port_name_clt[MPI_MAX_PORT_NAME]; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   if( service == NULL ) service = defaultService;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   /* only process of rank null can publish name */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   /* A lookup for an unpublished service generate an error */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   if( myrank == 0 ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* Try to be a server. If there service is already published, try to be a cient */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Open_port(MPI_INFO_NULL, port_name); 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf(&quot;[%d] Publish name\n&quot;,myrank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if ( MPI_Publish_name(service, MPI_INFO_NULL, port_name) == MPI_SUCCESS )  {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       *srv = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       printf(&quot;[%d] service %s available at %s\n&quot;,myrank,service,port_name);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     else if ( MPI_Lookup_name(service, MPI_INFO_NULL, port_name_clt) == MPI_SUCCESS ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       MPI_Close_port( port_name ); 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       clt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       /* Throw exception */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       printf(&quot;[%d] Error\n&quot;,myrank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   else{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* Waiting rank 0 publish name */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf(&quot;[%d] Lookup name\n&quot;,myrank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if ( MPI_Lookup_name(service, MPI_INFO_NULL, port_name_clt) == MPI_SUCCESS ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       clt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       /* Throw exception */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Bcast(srv,1,MPI_INT,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You're broadcasting srv here -- won't everyone now have *srv==1, such that they all call MPI_COMM_ACCEPT, below?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   if ( *srv )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* I am the Master */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;gcom );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   else{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /*  Connect to service SERVER, get the inter-communicator server*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if ( MPI_Comm_connect(port_name_clt, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;gcom )  == MPI_SUCCESS )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       printf(&quot;[%d] I get the connection with %s at %s !\n&quot;,myrank, service, port_name_clt);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   if(myrank != 0) *srv = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   return gcom;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
       _\\|//_
      (' 0 0 ')
____ooO  (_) Ooo______________________________________________________
 Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
 CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
 91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
------------Oooo---------------------------------------------------
       oooO (   )
       (   ) ) /
        \ ( (_/
         \_)
Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
&#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en conserver
de copie.
This e-mail and any files transmitted with it are confidential and
intended solely for the use of the individual to whom they are addressed.
If you have received this e-mail in error please inform the sender
immediately, without keeping any copy thereof.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15317/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15312.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15320.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15320.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
