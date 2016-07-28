<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 08:52:46 2007" -->
<!-- isoreceived="20070301135246" -->
<!-- sent="Thu, 01 Mar 2007 06:52:36 -0700" -->
<!-- isosent="20070301135236" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Spawn" -->
<!-- id="C20C28B4.1CE4%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA2340EB86378E43976ECBA4001310CA0194140E_at_atlantis.clb.tcfr.thales" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-01 08:52:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2744.php">G&#246;tz Waschk: "[OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>In reply to:</strong> <a href="2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing immediately leaps out at me - you are using a very old version of
<br>
Open MPI. I suspect Tim is testing on a much newer version, most likely the
<br>
1.2 version that is about to be released in the next day or two.
<br>
<p>If it's at all possible, I would urge you to upgrade to 1.2 - if you would
<br>
rather not wait for the official release, the web site's latest beta is
<br>
virtually identical. I believe you will find the code much improved and
<br>
worth the change.
<br>
<p>If you truly want to stick with the 1.1 family, then I would suggest you at
<br>
least update to the latest release there (we are currently at 1.1.4, and
<br>
1.1.5 - which is planned to be the last in that series - is also coming out
<br>
in the next day or two).
<br>
<p>Hope that helps
<br>
<p>Ralph
<br>
<p><p><p>On 3/1/07 4:44 AM, &quot;Rozzen.VINCONT_at_[hidden]&quot;
<br>
&lt;Rozzen.VINCONT_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; Here is attached the output of ompi_info in the file ompi_info.txt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Message d'origine-----
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]De la
</span><br>
<span class="quotelev1">&gt; part de Tim Prins
</span><br>
<span class="quotelev1">&gt; Envoy&#233; : jeudi 1 mars 2007 05:45
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] MPI_Comm_Spawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried to reproduce this but cannot. I have been able to run your test
</span><br>
<span class="quotelev1">&gt; program to over 100 spawns. So I can track this further, please send the
</span><br>
<span class="quotelev1">&gt; output of ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday 27 February 2007 10:15 am, Rozzen.VINCONT_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you know if there is a limit to the number of MPI_Comm_spawn we can use
</span><br>
<span class="quotelev2">&gt;&gt; in order to launch a program? I want to start and stop a program several
</span><br>
<span class="quotelev2">&gt;&gt; times (with the function MPI_Comm_spawn) but every time after  31
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn, I get a &quot;segmentation fault&quot;. Could you give me your point
</span><br>
<span class="quotelev2">&gt;&gt; of you to solve this problem?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /*file .c : spawned  the file Exe*/
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define     EXE_TEST             &quot;/home/workspace/test_spaw1/src/Exe&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     long *lpBufferMpi;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm lIntercom;
</span><br>
<span class="quotelev2">&gt;&gt;     int lErrcode;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm lCommunicateur;
</span><br>
<span class="quotelev2">&gt;&gt;     int lRangMain,lRangExe,lMessageEnvoi,lIter,NiveauThreadVoulu,
</span><br>
<span class="quotelev2">&gt;&gt; NiveauThreadObtenu,lTailleBuffer; int *lpMessageEnvoi=&amp;lMessageEnvoi;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Status lStatus;             /*status de reception*/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      lIter=0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* MPI environnement */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;main*******************************\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;main : Lancement MPI*\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu, &amp;NiveauThreadObtenu
</span><br>
<span class="quotelev2">&gt;&gt; ); lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Buffer_attach( (void*)lpBufferMpi, 10000 * sizeof(long) );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     while (lIter&lt;1000){
</span><br>
<span class="quotelev2">&gt;&gt;         lIter ++;
</span><br>
<span class="quotelev2">&gt;&gt;         lIntercom=(MPI_Comm)-1 ;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_spawn( EXE_TEST, NULL, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt;&gt;                       0, MPI_COMM_WORLD, &amp;lIntercom, &amp;lErrcode );
</span><br>
<span class="quotelev2">&gt;&gt;         printf( &quot;%i main***MPI_Comm_spawn return : %d\n&quot;,lIter, lErrcode );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         if(lIntercom == (MPI_Comm)-1 ){
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;%i Intercom null\n&quot;,lIter);
</span><br>
<span class="quotelev2">&gt;&gt;             return 0;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Intercomm_merge(lIntercom, 0,&amp;lCommunicateur );
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_rank( lCommunicateur, &amp;lRangMain);
</span><br>
<span class="quotelev2">&gt;&gt;         lRangExe=1-lRangMain;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;%i main***Rang main : %i   Rang exe : %i
</span><br>
<span class="quotelev2">&gt;&gt; \n&quot;,lIter,(int)lRangMain,(int)lRangExe); sleep(2);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* Arret de l'environnement MPI */
</span><br>
<span class="quotelev2">&gt;&gt;     lTailleBuffer=10000* sizeof(long);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lTailleBuffer );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev2">&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;Main = End .\n&quot; );
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; /**************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; **********************/ Exe:
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;     /* pour sleep() */
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev2">&gt;&gt; /*1)pour communiaction MPI*/
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm lCommunicateur;        /*communicateur du process*/
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm CommParent;            /*Communiacteur parent &#224; r&#233;cup&#233;rer*/
</span><br>
<span class="quotelev2">&gt;&gt;     int lRank;                      /*rang du communicateur du process*/
</span><br>
<span class="quotelev2">&gt;&gt;     int lRangMain;            /*rang du s&#233;quenceur si lanc&#233; en mode
</span><br>
<span class="quotelev2">&gt;&gt; normal*/ int lTailleCommunicateur;       /*taille du communicateur;*/
</span><br>
<span class="quotelev2">&gt;&gt;     long *lpBufferMpi;              /*buffer pour message*/
</span><br>
<span class="quotelev2">&gt;&gt;     int lBufferSize;                /*taille du buffer*/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /*2) pour les thread*/
</span><br>
<span class="quotelev2">&gt;&gt;     int NiveauThreadVoulu, NiveauThreadObtenu;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     lCommunicateur   = (MPI_Comm)-1;
</span><br>
<span class="quotelev2">&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev2">&gt;&gt;     int erreur = MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev2">&gt;&gt;         return -1;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /*2) Attachement &#224; un buffer pour le message*/
</span><br>
<span class="quotelev2">&gt;&gt;     lBufferSize=10000 * sizeof(long);
</span><br>
<span class="quotelev2">&gt;&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev2">&gt;&gt;     erreur = MPI_Buffer_attach( (void*)lpBufferMpi, lBufferSize );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev2">&gt;&gt;         return -1;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;Exe : Lance \n&quot; );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_get_parent(&amp;CommParent);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Intercomm_merge( CommParent, 1, &amp;lCommunicateur );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank( lCommunicateur, &amp;lRank );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size( lCommunicateur, &amp;lTailleCommunicateur );
</span><br>
<span class="quotelev2">&gt;&gt;     lRangMain   =1-lRank;
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;Exe: lRankExe  = %d   lRankMain  = %d\n&quot;, lRank , lRangMain,
</span><br>
<span class="quotelev2">&gt;&gt; lTailleCommunicateur);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lBufferSize );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev2">&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;Exe: Fin.\n\n\n&quot; );
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /**************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; **********************/ result :
</span><br>
<span class="quotelev2">&gt;&gt; main*******************************
</span><br>
<span class="quotelev2">&gt;&gt; main : Lancement MPI*
</span><br>
<span class="quotelev2">&gt;&gt; 1 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev2">&gt;&gt; 1 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev2">&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev2">&gt;&gt; 2 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev2">&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev2">&gt;&gt; 3 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev2">&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 30 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev2">&gt;&gt; 30 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev2">&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 31 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev2">&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev2">&gt;&gt; 31 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev2">&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev2">&gt;&gt; Erreur de segmentation
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2744.php">G&#246;tz Waschk: "[OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>In reply to:</strong> <a href="2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
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
