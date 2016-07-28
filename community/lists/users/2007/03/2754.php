<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  5 16:34:08 2007" -->
<!-- isoreceived="20070305213408" -->
<!-- sent="Mon, 5 Mar 2007 16:34:06 -0500" -->
<!-- isosent="20070305213406" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Spawn" -->
<!-- id="3ACBB5C4-CCD3-4A6D-BA60-5AE5164E6316_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31D991C4-1110-438A-BEE6-218B383C4EFF_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-05 16:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2755.php">Christian Simon: "[OMPI users] configure is too smart !"</a>
<li><strong>Previous message:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind, I was just able to replicate it. I'll look into it.
<br>
<p>Tim
<br>
<p>On Mar 5, 2007, at 4:26 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; That is possible. Threading support is VERY lightly tested, but I
</span><br>
<span class="quotelev1">&gt; doubt it is the problem since it always fails after 31 spawns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, I have tried with these configure options and the same version
</span><br>
<span class="quotelev1">&gt; of Open MPI and have still have been able to replicate this (after
</span><br>
<span class="quotelev1">&gt; letting it spawn over 500 times). Have you been able to try a more
</span><br>
<span class="quotelev1">&gt; recent version of Open MPI? What kind of system is it? How many nodes
</span><br>
<span class="quotelev1">&gt; are you running on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2007, at 1:21 PM, Rozzen.VINCONT_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the problem comes from the configuration options.
</span><br>
<span class="quotelev2">&gt;&gt; The configuration options used are :
</span><br>
<span class="quotelev2">&gt;&gt; ./configure  --enable-mpi-threads --enable-progress-threads --with-
</span><br>
<span class="quotelev2">&gt;&gt; threads=posix --enable-smp-locks
</span><br>
<span class="quotelev2">&gt;&gt; Could you give me your point of view about that please ?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Message d'origine-----
</span><br>
<span class="quotelev2">&gt;&gt; De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; De la
</span><br>
<span class="quotelev2">&gt;&gt; part de Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt; Envoy&#233; : mardi 27 f&#233;vrier 2007 16:26
</span><br>
<span class="quotelev2">&gt;&gt; &#192; : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Objet : Re: [OMPI users] MPI_Comm_Spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that's interesting! There shouldn't be a limit, but to be
</span><br>
<span class="quotelev2">&gt;&gt; honest, I've
</span><br>
<span class="quotelev2">&gt;&gt; never tested that mode of operation - let me look into it and see.
</span><br>
<span class="quotelev2">&gt;&gt; It sounds
</span><br>
<span class="quotelev2">&gt;&gt; like there is some counter that is overflowing, but I'll look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/27/07 8:15 AM, &quot;Rozzen.VINCONT_at_[hidden]&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Rozzen.VINCONT_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know if there is a limit to the number of MPI_Comm_spawn we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can use in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order to launch a program?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to start and stop a program several times (with the function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_spawn) but every time after  31 MPI_Comm_spawn, I get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you give me your point of you to solve this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*file .c : spawned  the file Exe*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define     EXE_TEST             &quot;/home/workspace/test_spaw1/src/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     long *lpBufferMpi;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm lIntercom;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lErrcode;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm lCommunicateur;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lRangMain,lRangExe,lMessageEnvoi,lIter,NiveauThreadVoulu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NiveauThreadObtenu,lTailleBuffer;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int *lpMessageEnvoi=&amp;lMessageEnvoi;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status lStatus;             /*status de reception*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      lIter=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* MPI environnement */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;main*******************************\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;main : Lancement MPI*\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Buffer_attach( (void*)lpBufferMpi, 10000 * sizeof(long) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     while (lIter&lt;1000){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         lIter ++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         lIntercom=(MPI_Comm)-1 ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_spawn( EXE_TEST, NULL, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       0, MPI_COMM_WORLD, &amp;lIntercom, &amp;lErrcode );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf( &quot;%i main***MPI_Comm_spawn return : %d\n&quot;,lIter,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lErrcode );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if(lIntercom == (MPI_Comm)-1 ){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             printf(&quot;%i Intercom null\n&quot;,lIter);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Intercomm_merge(lIntercom, 0,&amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_rank( lCommunicateur, &amp;lRangMain);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         lRangExe=1-lRangMain;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;%i main***Rang main : %i   Rang exe : %i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \n&quot;,lIter,(int)lRangMain,(int)lRangExe);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sleep(2);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* Arret de l'environnement MPI */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lTailleBuffer=10000* sizeof(long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lTailleBuffer );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Main = End .\n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;     /* pour sleep() */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*1)pour communiaction MPI*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm lCommunicateur;        /*communicateur du process*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm CommParent;            /*Communiacteur parent &#224;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r&#233;cup&#233;rer*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lRank;                      /*rang du communicateur du
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lRangMain;            /*rang du s&#233;quenceur si lanc&#233; en
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mode normal*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lTailleCommunicateur;       /*taille du communicateur;*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     long *lpBufferMpi;              /*buffer pour message*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lBufferSize;                /*taille du buffer*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /*2) pour les thread*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int NiveauThreadVoulu, NiveauThreadObtenu;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lCommunicateur   = (MPI_Comm)-1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int erreur = MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return -1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /*2) Attachement &#224; un buffer pour le message*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lBufferSize=10000 * sizeof(long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     erreur = MPI_Buffer_attach( (void*)lpBufferMpi, lBufferSize );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return -1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Exe : Lance \n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_get_parent(&amp;CommParent);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Intercomm_merge( CommParent, 1, &amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_rank( lCommunicateur, &amp;lRank );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size( lCommunicateur, &amp;lTailleCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lRangMain   =1-lRank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Exe: lRankExe  = %d   lRankMain  = %d\n&quot;, lRank ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lRangMain,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lTailleCommunicateur);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lBufferSize );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Exe: Fin.\n\n\n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main : Lancement MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Erreur de segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2755.php">Christian Simon: "[OMPI users] configure is too smart !"</a>
<li><strong>Previous message:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="2753.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
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
