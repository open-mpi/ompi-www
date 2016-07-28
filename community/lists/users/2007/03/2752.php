<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  5 13:21:50 2007" -->
<!-- isoreceived="20070305182150" -->
<!-- sent="Mon, 5 Mar 2007 19:21:44 +0100 " -->
<!-- isosent="20070305182144" -->
<!-- name="Rozzen.VINCONT_at_[hidden]" -->
<!-- email="Rozzen.VINCONT_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Spawn" -->
<!-- id="CA2340EB86378E43976ECBA4001310CA01941412_at_atlantis.clb.tcfr.thales" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] MPI_Comm_Spawn" -->
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
<strong>From:</strong> <a href="mailto:Rozzen.VINCONT_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Comm_Spawn"><em>Rozzen.VINCONT_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-03-05 13:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2751.php">Michael: "[OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2735.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe the problem comes from the configuration options.
<br>
The configuration options used are :
<br>
./configure  --enable-mpi-threads --enable-progress-threads --with-threads=posix --enable-smp-locks
<br>
Could you give me your point of view about that please ?
<br>
Thanks
<br>
<p>-----Message d'origine-----
<br>
De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]De la
<br>
part de Ralph H Castain
<br>
Envoy&#233; : mardi 27 f&#233;vrier 2007 16:26
<br>
&#192; : Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Objet : Re: [OMPI users] MPI_Comm_Spawn
<br>
<p><p>Now that's interesting! There shouldn't be a limit, but to be honest, I've
<br>
never tested that mode of operation - let me look into it and see. It sounds
<br>
like there is some counter that is overflowing, but I'll look.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 2/27/07 8:15 AM, &quot;Rozzen.VINCONT_at_[hidden]&quot;
<br>
&lt;Rozzen.VINCONT_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Do you know if there is a limit to the number of MPI_Comm_spawn we can use in
</span><br>
<span class="quotelev1">&gt; order to launch a program?
</span><br>
<span class="quotelev1">&gt; I want to start and stop a program several times (with the function
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn) but every time after  31 MPI_Comm_spawn, I get a &quot;segmentation
</span><br>
<span class="quotelev1">&gt; fault&quot;.
</span><br>
<span class="quotelev1">&gt; Could you give me your point of you to solve this problem?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /*file .c : spawned  the file Exe*/
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev1">&gt; #define     EXE_TEST             &quot;/home/workspace/test_spaw1/src/Exe&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     long *lpBufferMpi;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm lIntercom;
</span><br>
<span class="quotelev1">&gt;     int lErrcode;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm lCommunicateur;
</span><br>
<span class="quotelev1">&gt;     int lRangMain,lRangExe,lMessageEnvoi,lIter,NiveauThreadVoulu,
</span><br>
<span class="quotelev1">&gt; NiveauThreadObtenu,lTailleBuffer;
</span><br>
<span class="quotelev1">&gt;     int *lpMessageEnvoi=&amp;lMessageEnvoi;
</span><br>
<span class="quotelev1">&gt;     MPI_Status lStatus;             /*status de reception*/
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;      lIter=0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* MPI environnement */
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     printf(&quot;main*******************************\n&quot;);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;main : Lancement MPI*\n&quot;);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt;     MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu, &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev1">&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev1">&gt;     MPI_Buffer_attach( (void*)lpBufferMpi, 10000 * sizeof(long) );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     while (lIter&lt;1000){
</span><br>
<span class="quotelev1">&gt;         lIter ++;
</span><br>
<span class="quotelev1">&gt;         lIntercom=(MPI_Comm)-1 ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_spawn( EXE_TEST, NULL, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt;                       0, MPI_COMM_WORLD, &amp;lIntercom, &amp;lErrcode );
</span><br>
<span class="quotelev1">&gt;         printf( &quot;%i main***MPI_Comm_spawn return : %d\n&quot;,lIter, lErrcode );
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;         if(lIntercom == (MPI_Comm)-1 ){
</span><br>
<span class="quotelev1">&gt;             printf(&quot;%i Intercom null\n&quot;,lIter);
</span><br>
<span class="quotelev1">&gt;             return 0;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI_Intercomm_merge(lIntercom, 0,&amp;lCommunicateur );
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank( lCommunicateur, &amp;lRangMain);
</span><br>
<span class="quotelev1">&gt;         lRangExe=1-lRangMain;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%i main***Rang main : %i   Rang exe : %i
</span><br>
<span class="quotelev1">&gt; \n&quot;,lIter,(int)lRangMain,(int)lRangExe);
</span><br>
<span class="quotelev1">&gt;         sleep(2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     /* Arret de l'environnement MPI */
</span><br>
<span class="quotelev1">&gt;     lTailleBuffer=10000* sizeof(long);
</span><br>
<span class="quotelev1">&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lTailleBuffer );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev1">&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf( &quot;Main = End .\n&quot; );
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; /*****************************************************************************
</span><br>
<span class="quotelev1">&gt; *******************/
</span><br>
<span class="quotelev1">&gt; Exe:
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;     /* pour sleep() */
</span><br>
<span class="quotelev1">&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev1">&gt; /*1)pour communiaction MPI*/
</span><br>
<span class="quotelev1">&gt;     MPI_Comm lCommunicateur;        /*communicateur du process*/
</span><br>
<span class="quotelev1">&gt;     MPI_Comm CommParent;            /*Communiacteur parent &#224; r&#233;cup&#233;rer*/
</span><br>
<span class="quotelev1">&gt;     int lRank;                      /*rang du communicateur du process*/
</span><br>
<span class="quotelev1">&gt;     int lRangMain;            /*rang du s&#233;quenceur si lanc&#233; en mode normal*/
</span><br>
<span class="quotelev1">&gt;     int lTailleCommunicateur;       /*taille du communicateur;*/
</span><br>
<span class="quotelev1">&gt;     long *lpBufferMpi;              /*buffer pour message*/
</span><br>
<span class="quotelev1">&gt;     int lBufferSize;                /*taille du buffer*/
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     /*2) pour les thread*/
</span><br>
<span class="quotelev1">&gt;     int NiveauThreadVoulu, NiveauThreadObtenu;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     lCommunicateur   = (MPI_Comm)-1;
</span><br>
<span class="quotelev1">&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt;     int erreur = MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev1">&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     if (erreur!=0){
</span><br>
<span class="quotelev1">&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev1">&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev1">&gt;         return -1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    /*2) Attachement &#224; un buffer pour le message*/
</span><br>
<span class="quotelev1">&gt;     lBufferSize=10000 * sizeof(long);
</span><br>
<span class="quotelev1">&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev1">&gt;     erreur = MPI_Buffer_attach( (void*)lpBufferMpi, lBufferSize );
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     if (erreur!=0){
</span><br>
<span class="quotelev1">&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev1">&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev1">&gt;         return -1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     printf( &quot;Exe : Lance \n&quot; );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_get_parent(&amp;CommParent);
</span><br>
<span class="quotelev1">&gt;     MPI_Intercomm_merge( CommParent, 1, &amp;lCommunicateur );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank( lCommunicateur, &amp;lRank );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size( lCommunicateur, &amp;lTailleCommunicateur );
</span><br>
<span class="quotelev1">&gt;     lRangMain   =1-lRank;
</span><br>
<span class="quotelev1">&gt;     printf( &quot;Exe: lRankExe  = %d   lRankMain  = %d\n&quot;, lRank , lRangMain,
</span><br>
<span class="quotelev1">&gt; lTailleCommunicateur);
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     sleep(1);
</span><br>
<span class="quotelev1">&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lBufferSize );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev1">&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev1">&gt;     printf( &quot;Exe: Fin.\n\n\n&quot; );
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*****************************************************************************
</span><br>
<span class="quotelev1">&gt; *******************/
</span><br>
<span class="quotelev1">&gt; result :
</span><br>
<span class="quotelev1">&gt; main*******************************
</span><br>
<span class="quotelev1">&gt; main : Lancement MPI*
</span><br>
<span class="quotelev1">&gt; 1 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; 1 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; Exe: Fin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; 2 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; Exe: Fin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; 3 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; Exe: Fin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 30 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; 30 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; Exe: Fin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 31 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; 31 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; Erreur de segmentation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2751.php">Michael: "[OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2735.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
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
