<?
$subject_val = "Re: [OMPI users] MPI_Comm_Spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 06:44:19 2007" -->
<!-- isoreceived="20070301114419" -->
<!-- sent="Thu, 1 Mar 2007 12:44:12 +0100 " -->
<!-- isosent="20070301114412" -->
<!-- name="Rozzen.VINCONT_at_[hidden]" -->
<!-- email="Rozzen.VINCONT_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Spawn" -->
<!-- id="CA2340EB86378E43976ECBA4001310CA0194140E_at_atlantis.clb.tcfr.thales" -->
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
<strong>Date:</strong> 2007-03-01 06:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2741.php">G&#246;tz Waschk: "[OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>Previous message:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2007/02/2732.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2742.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2742.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your help.
<br>
Here is attached the output of ompi_info in the file ompi_info.txt.
<br>
<p>-----Message d'origine-----
<br>
De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]De la
<br>
part de Tim Prins
<br>
Envoy&#233; : jeudi 1 mars 2007 05:45
<br>
&#192; : Open MPI Users
<br>
Objet : Re: [OMPI users] MPI_Comm_Spawn
<br>
<p><p>I have tried to reproduce this but cannot. I have been able to run your test 
<br>
program to over 100 spawns. So I can track this further, please send the 
<br>
output of ompi_info.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Tuesday 27 February 2007 10:15 am, Rozzen.VINCONT_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Do you know if there is a limit to the number of MPI_Comm_spawn we can use
</span><br>
<span class="quotelev1">&gt; in order to launch a program? I want to start and stop a program several
</span><br>
<span class="quotelev1">&gt; times (with the function MPI_Comm_spawn) but every time after  31
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn, I get a &quot;segmentation fault&quot;. Could you give me your point
</span><br>
<span class="quotelev1">&gt; of you to solve this problem?
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
<span class="quotelev1">&gt; NiveauThreadObtenu,lTailleBuffer; int *lpMessageEnvoi=&amp;lMessageEnvoi;
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
<span class="quotelev1">&gt;     MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu, &amp;NiveauThreadObtenu
</span><br>
<span class="quotelev1">&gt; ); lpBufferMpi = calloc( 10000, sizeof(long));
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
<span class="quotelev1">&gt; \n&quot;,lIter,(int)lRangMain,(int)lRangExe); sleep(2);
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
<span class="quotelev1">&gt; /**************************************************************************
</span><br>
<span class="quotelev1">&gt;**********************/ Exe:
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
<span class="quotelev1">&gt;     int lRangMain;            /*rang du s&#233;quenceur si lanc&#233; en mode
</span><br>
<span class="quotelev1">&gt; normal*/ int lTailleCommunicateur;       /*taille du communicateur;*/
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
<span class="quotelev1">&gt; /**************************************************************************
</span><br>
<span class="quotelev1">&gt;**********************/ result :
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="../../att-2740/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2741.php">G&#246;tz Waschk: "[OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>Previous message:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2007/02/2732.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2742.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2742.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
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
