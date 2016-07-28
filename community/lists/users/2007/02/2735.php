<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 27 10:16:02 2007" -->
<!-- isoreceived="20070227151602" -->
<!-- sent="Tue, 27 Feb 2007 16:15:49 +0100" -->
<!-- isosent="20070227151549" -->
<!-- name="Rozzen.VINCONT_at_[hidden]" -->
<!-- email="Rozzen.VINCONT_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_Spawn" -->
<!-- id="CA2340EB86378E43976ECBA4001310CA0194140C_at_atlantis.clb.tcfr.thales" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2007-02-27 10:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2734.php">Jeff Squyres: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2741.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2752.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you know if there is a limit to the number of MPI_Comm_spawn we can use in order to launch a program?
<br>
I want to start and stop a program several times (with the function MPI_Comm_spawn) but every time after  31 MPI_Comm_spawn, I get a &quot;segmentation fault&quot;.
<br>
Could you give me your point of you to solve this problem?
<br>
Thanks
<br>
&nbsp;
<br>
/*file .c : spawned  the file Exe*/
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;malloc.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;pthread.h&gt;
<br>
#include &lt;signal.h&gt; 
<br>
#include &lt;sys/time.h&gt;
<br>
#include &lt;errno.h&gt;
<br>
#define     EXE_TEST             &quot;/home/workspace/test_spaw1/src/Exe&quot;
<br>
<p><p><p>int main( int argc, char **argv ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long *lpBufferMpi;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm lIntercom;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int lErrcode;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm lCommunicateur;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int lRangMain,lRangExe,lMessageEnvoi,lIter,NiveauThreadVoulu, NiveauThreadObtenu,lTailleBuffer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int *lpMessageEnvoi=&amp;lMessageEnvoi;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status lStatus;             /*status de reception*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lIter=0;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;/* MPI environnement */    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;main*******************************\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;main : Lancement MPI*\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu, &amp;NiveauThreadObtenu );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lpBufferMpi = calloc( 10000, sizeof(long));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Buffer_attach( (void*)lpBufferMpi, 10000 * sizeof(long) );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;while (lIter&lt;1000){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lIter ++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lIntercom=(MPI_Comm)-1 ;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn( EXE_TEST, NULL, 1, MPI_INFO_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_WORLD, &amp;lIntercom, &amp;lErrcode );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;%i main***MPI_Comm_spawn return : %d\n&quot;,lIter, lErrcode );
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(lIntercom == (MPI_Comm)-1 ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i Intercom null\n&quot;,lIter);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge(lIntercom, 0,&amp;lCommunicateur );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( lCommunicateur, &amp;lRangMain);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lRangExe=1-lRangMain;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i main***Rang main : %i   Rang exe : %i \n&quot;,lIter,(int)lRangMain,(int)lRangExe);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(2);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Arret de l'environnement MPI */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lTailleBuffer=10000* sizeof(long);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lTailleBuffer );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free( &amp;lCommunicateur );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize( );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free( lpBufferMpi );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Main = End .\n&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
/************************************************************************************************/
<br>
Exe:
<br>
#include &lt;string.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;malloc.h&gt;
<br>
#include &lt;unistd.h&gt;     /* pour sleep() */
<br>
#include &lt;pthread.h&gt;
<br>
#include &lt;semaphore.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main( int argc, char **argv ) {
<br>
/*1)pour communiaction MPI*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm lCommunicateur;        /*communicateur du process*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm CommParent;            /*Communiacteur parent &#224; r&#233;cup&#233;rer*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int lRank;                      /*rang du communicateur du process*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int lRangMain;            /*rang du s&#233;quenceur si lanc&#233; en mode normal*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int lTailleCommunicateur;       /*taille du communicateur;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long *lpBufferMpi;              /*buffer pour message*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int lBufferSize;                /*taille du buffer*/
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/*2) pour les thread*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int NiveauThreadVoulu, NiveauThreadObtenu;
<br>
<p>&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lCommunicateur   = (MPI_Comm)-1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int erreur = MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu, &amp;NiveauThreadObtenu );   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (erreur!=0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;erreur\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free( lpBufferMpi );  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;/*2) Attachement &#224; un buffer pour le message*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lBufferSize=10000 * sizeof(long);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lpBufferMpi = calloc( 10000, sizeof(long));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;erreur = MPI_Buffer_attach( (void*)lpBufferMpi, lBufferSize );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (erreur!=0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;erreur\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free( lpBufferMpi );  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Exe : Lance \n&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;CommParent);   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge( CommParent, 1, &amp;lCommunicateur );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( lCommunicateur, &amp;lRank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( lCommunicateur, &amp;lTailleCommunicateur );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lRangMain   =1-lRank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Exe: lRankExe  = %d   lRankMain  = %d\n&quot;, lRank , lRangMain, lTailleCommunicateur);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lBufferSize );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free( &amp;lCommunicateur );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize( );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free( lpBufferMpi );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Exe: Fin.\n\n\n&quot; );
<br>
}
<br>
<p><p>/************************************************************************************************/
<br>
result :
<br>
main*******************************
<br>
main : Lancement MPI*
<br>
1 main***MPI_Comm_spawn return : 0
<br>
Exe : Lance
<br>
1 main***Rang main : 0   Rang exe : 1
<br>
Exe: lRankExe  = 1   lRankMain  = 0
<br>
Exe: Fin.
<br>
<p><p>2 main***MPI_Comm_spawn return : 0
<br>
Exe : Lance
<br>
2 main***Rang main : 0   Rang exe : 1
<br>
Exe: lRankExe  = 1   lRankMain  = 0
<br>
Exe: Fin.
<br>
<p><p>3 main***MPI_Comm_spawn return : 0
<br>
Exe : Lance
<br>
3 main***Rang main : 0   Rang exe : 1
<br>
Exe: lRankExe  = 1   lRankMain  = 0
<br>
Exe: Fin.
<br>
<p>....
<br>
<p>30 main***MPI_Comm_spawn return : 0
<br>
Exe : Lance
<br>
30 main***Rang main : 0   Rang exe : 1
<br>
Exe: lRankExe  = 1   lRankMain  = 0
<br>
Exe: Fin.
<br>
<p><p>31 main***MPI_Comm_spawn return : 0
<br>
Exe : Lance
<br>
31 main***Rang main : 0   Rang exe : 1
<br>
Exe: lRankExe  = 1   lRankMain  = 0
<br>
Erreur de segmentation
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2734.php">Jeff Squyres: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2741.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2752.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
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
