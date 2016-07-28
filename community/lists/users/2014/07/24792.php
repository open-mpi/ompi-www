<?
$subject_val = "Re: [OMPI users] MPI_T Control Variables";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 12:34:06 2014" -->
<!-- isoreceived="20140716163406" -->
<!-- sent="Wed, 16 Jul 2014 10:34:04 -0600" -->
<!-- isosent="20140716163404" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_T Control Variables" -->
<!-- id="20140716163404.GS1506_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1405527775308.53587_at_miners.utep.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_T Control Variables<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 12:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24793.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24791.php">Gallardo, Esthela: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24791.php">Gallardo, Esthela: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should only run varlist with one rank. Also, there is some commented
<br>
out code in varlist that re-enables a check that doesn't work with
<br>
mvapich (they didn't include one of the error codes that was defined in
<br>
MPI-3.0).
<br>
<p>-Nathan
<br>
<p>On Wed, Jul 16, 2014 at 04:22:55PM +0000, Gallardo, Esthela wrote:
<br>
<span class="quotelev1">&gt; Hey, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry I wasn't able to follow up. I did try varlist and the code I have with trunk and 1.8.2, but I am still encountering errors. I'm debating if it's due to how I am running the application. I use the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  -np 16 -hostfile hosts --mca btl openib,self ./varlist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this correct? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Esthela Gallardo 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 11, 2014 11:33 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_T Control Variables
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ignore that. Their version is ok. The one I have looks like it is out of
</span><br>
<span class="quotelev1">&gt; date. Just tested theirs with trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 11, 2014 at 11:27:42AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmm, looks like the varlist fixes I provided to LLNL haven't made it
</span><br>
<span class="quotelev2">&gt; &gt; into their git repo. Use the attached version with 1.8.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jul 11, 2014 at 05:04:07PM +0000, Gallardo, Esthela wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Nathan,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Where can I access the 1.8.2 tarball? I'm not sure if you meant to include it as an attachment. If so, then it did not go through.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Esthela Gallardo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Friday, July 11, 2014 10:50 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] MPI_T Control Variables
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you try with a 1.8.2 nightly tarball or the trunk? I fixed a couple
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of bugs that varlist discovered (also found some in varlist).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Nathan Hjelm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HPC-5, LANL
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, Jul 11, 2014 at 04:42:01PM +0000, Gallardo, Esthela wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    I am new to the MPI_T interface, and was trying to run an applications
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    developed by LLNL which queries and lists the values of the control
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    variables available. The tool can be downloaded from the following site:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    <a href="https://computation-rnd.llnl.gov/mpi_t/varList.php">https://computation-rnd.llnl.gov/mpi_t/varList.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    I noticed that when I ran the tool, I would encounter the following
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    error:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] Failing at address: 0x2b54ce9d1418
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] [ 0] /lib64/libpthread.so.0[0x397060f710]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] [ 1]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    /work/02282/esthela/MPI/install-openmpi-1.8.1/lib/libmpi.so.1(MPI_T_cvar_read+0xc6)[0x2b54cbe55bd6]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] [ 2] ./varlist(list_cvars+0xda7)[0x402e17]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] [ 3] ./varlist(main+0x347)[0x401e37]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] [ 4]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    /lib64/libc.so.6(__libc_start_main+0xfd)[0x396fe1ed1d]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] [ 5] ./varlist[0x401a29]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [c557-604:121075] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    I went ahead and tried to write a code that follows the process in varlist
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    to read the control variables, and encountered the same error when I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    called the following function:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    err=MPI_T_cvar_read(handle,val);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Through a recommendation, I ran both my code and the tool using mvapich,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    and could not reproduce the error. I don't know if this is a bug or if I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    didn't configure my installation of OpenMPI correctly. Below is a script
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    that I used to install OpenMPI:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    set -e
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    rm -fr /work/02282/esthela/MPI/install-openmpi-1.8.1 &amp;&amp; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    make clean &amp;&amp; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    ./configure --with-cma=yes
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    --prefix=/work/02282/esthela/MPI/install-openmpi-1.8.1 \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    CC=icc CXX=icpc FC=ifort --enable-shared CFLAGS=&quot;-O3 -ip -xHost&quot; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    CXXFLAGS=&quot;-O3 -ip -xHost&quot; --without-slurm --disable-vt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    --with-verbs=/opt/ofed \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    --with-verbs-libdir=/opt/ofed/lib64 &amp;&amp; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    make clean &amp;&amp; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    make -j4 &amp;&amp; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    make install&amp;#8203;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Help in resolving this issue would be greatly appreciated.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Thank you!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Esthela Gallardo
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24758.php">http://www.open-mpi.org/community/lists/users/2014/07/24758.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24760.php">http://www.open-mpi.org/community/lists/users/2014/07/24760.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;getopt.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define SCREENLEN 78
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifndef MPI_COUNT
</span><br>
<span class="quotelev2">&gt; &gt; #define MPI_COUNT MPI_INT
</span><br>
<span class="quotelev2">&gt; &gt; typedef int MPI_Count;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifndef MPI_T_CVAR_HANDLE_NULL
</span><br>
<span class="quotelev2">&gt; &gt; #define MPI_T_CVAR_HANDLE_NULL NULL
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define CHECKERR(errstr,err) if (err!=MPI_SUCCESS) { printf(&quot;ERROR: %s: MPI error code %i\n&quot;,errstr,err); usage(1); }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int list_pvar,list_cvar,longlist,verbosity,runmpi;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define RUNMPI 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Usage */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void usage(int e)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Usage: varlist [-c] [-p] [-v &lt;VL&gt;] [-l] [-m]\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;    -c = List only Control Variables\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;    -p = List only Performance Variables\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;    -v = List up to verbosity level &lt;VL&gt; (1=U/B to 9=D/D)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;    -l = Long list with all information, incl. descriptions\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;    -m = Do not call MPI_Init before listing variables\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;    -h = This help text\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       exit(e);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print a filled string */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_filled(char *s, int len, char c)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       int i;
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;%s&quot;,s);
</span><br>
<span class="quotelev2">&gt; &gt;       for (i=strlen(s); i&lt;len; i++)
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;%c&quot;,c);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print a PVAR class */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_class(int c)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       switch(c) {
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_STATE:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;STATE  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_LEVEL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;LEVEL  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_SIZE:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;SIZE   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_PERCENTAGE:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;PERCENT&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_HIGHWATERMARK:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;HIGHWAT&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_LOWWATERMARK:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;LOWWAT &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_COUNTER:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;COUNTER&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_AGGREGATE:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;AGGR   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_TIMER:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;TIMER  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_PVAR_CLASS_GENERIC:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;GENERIC&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       default:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;UNKNOWN&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print a CVAR/PVAR bind */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_bind(int b)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       switch (b) {
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_NO_OBJECT:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;n/a     &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_COMM:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;COMM    &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_DATATYPE:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;DATATYPE&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_ERRHANDLER:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;ERRHAND &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_FILE:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;FILE    &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_GROUP:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;GROUP   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_OP:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;OP      &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_REQUEST:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;REQUEST &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_WIN:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;WINDOW  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_MESSAGE:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;MESSAGE &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_BIND_MPI_INFO:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;INFO    &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       default:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;UNKNOWN &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print a CVAR/PVAR type */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_type(MPI_Datatype t)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       if (t==MPI_INT)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;INT   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else if (t==MPI_UNSIGNED)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;UINT  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else if (t==MPI_UNSIGNED_LONG)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;ULONG &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else if (t==MPI_UNSIGNED_LONG_LONG)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;ULLONG&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else if (t==MPI_COUNT)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;COUNT &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else if (t==MPI_CHAR)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;CHAR  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else if (t==MPI_DOUBLE)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;DOUBLE&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;UNKNOW&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print CVAR Scope */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_scope(int s)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       switch (s) {
</span><br>
<span class="quotelev2">&gt; &gt; #if 0
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_SCOPE_CONSTANT:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;CONST   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_SCOPE_READONLY:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;READONLY&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_SCOPE_LOCAL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;LOCAL   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_SCOPE_GROUP:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;GROUP   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_SCOPE_GROUP_EQ:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;GROUP-EQ&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_SCOPE_ALL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;ALL-EQ  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_SCOPE_ALL_EQ:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;ALL     &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       default:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;UNKNOWN &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print a Yes/No class */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_yesno(int yesno)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       if (yesno)
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;YES&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       else
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; NO&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print verbosity level */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_verbosity(int verbos)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       switch (verbos) {
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_USER_BASIC:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;User/Basic = 1&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_USER_DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;User/Detail = 2&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_USER_ALL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;User/All = 3&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_TUNER_BASIC:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Tuner/Basic = 4&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_TUNER_DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Tuner/Detail = 5&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_TUNER_ALL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Tuner/All = 6&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_MPIDEV_BASIC:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Developer/Basic = 7&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_MPIDEV_DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Developer/Detail = 8&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_MPIDEV_ALL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Developer/All = 9&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       default:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;UNKNOWN&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void print_verbosity_short(int verbos)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       switch (verbos) {
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_USER_BASIC:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;U/B-1&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_USER_DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;U/D-2&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_USER_ALL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;U/A-3&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_TUNER_BASIC:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;T/B-4&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_TUNER_DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;T/D-5&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_TUNER_ALL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;T/A-6&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_MPIDEV_BASIC:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;D/B-7&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_MPIDEV_DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;D/D-8&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       case MPI_T_VERBOSITY_MPIDEV_ALL:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;D/A-9&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       default:
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;?????&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               break;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print all Performance Variables */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void list_pvars()
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       int num,err,i,numvars;
</span><br>
<span class="quotelev2">&gt; &gt;       char *name, *desc;
</span><br>
<span class="quotelev2">&gt; &gt;       int bind,vc,verbos,ro,ct,at;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Datatype dt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_T_enum et;
</span><br>
<span class="quotelev2">&gt; &gt;       int maxnamelen=strlen(&quot;Variable&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       int maxdesclen=0;
</span><br>
<span class="quotelev2">&gt; &gt;       int prtlen;
</span><br>
<span class="quotelev2">&gt; &gt;       int namelen,desclen;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Get number of variables */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       err=MPI_T_pvar_get_num(&amp;num);
</span><br>
<span class="quotelev2">&gt; &gt;       CHECKERR(&quot;PVARNUM&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Found %i performance variables\n&quot;,num);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Find string sizes */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       numvars=0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for (i=0; i&lt;num; i++)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               int namelen=0;
</span><br>
<span class="quotelev2">&gt; &gt;               int desclen=0;
</span><br>
<span class="quotelev2">&gt; &gt;               char fname[5];
</span><br>
<span class="quotelev2">&gt; &gt;               char fdesc[5];
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_T_pvar_get_info(i,fname,&amp;namelen,&amp;verbos,&amp;vc,&amp;dt,&amp;et,fdesc,&amp;desclen,&amp;bind,&amp;ro,&amp;ct,&amp;at);
</span><br>
<span class="quotelev2">&gt; &gt;               if (namelen&gt;maxnamelen) maxnamelen=namelen;
</span><br>
<span class="quotelev2">&gt; &gt;               if (desclen&gt;maxdesclen) maxdesclen=desclen;
</span><br>
<span class="quotelev2">&gt; &gt;               if (verbos&lt;=verbosity) numvars++;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Found %i performance variables with verbosity &lt;= &quot;,numvars);
</span><br>
<span class="quotelev2">&gt; &gt;       print_verbosity_short(verbosity);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;\n\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Allocate string buffers */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       name=(char*)malloc(sizeof(char)*maxnamelen);
</span><br>
<span class="quotelev2">&gt; &gt;       CHECKERR(&quot;Malloc Name&quot;,name==NULL);
</span><br>
<span class="quotelev2">&gt; &gt;       desc=(char*)malloc(sizeof(char)*maxdesclen);
</span><br>
<span class="quotelev2">&gt; &gt;       CHECKERR(&quot;Malloc Desc&quot;,desc==NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Print header */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       prtlen=0;
</span><br>
<span class="quotelev2">&gt; &gt;       if (!longlist)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               print_filled(&quot;Variable&quot;,maxnamelen,' ');
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen=maxnamelen+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;VRB  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=5+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Class  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=7+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Type  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=6+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Bind    &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=8+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;R/O&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=3+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;CNT&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=3+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;ATM&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=3;
</span><br>
<span class="quotelev2">&gt; &gt;               print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Loop and print */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for (i=0; i&lt;num; i++)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               namelen=maxnamelen;
</span><br>
<span class="quotelev2">&gt; &gt;               desclen=maxdesclen;
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_T_pvar_get_info(i,name,&amp;namelen,&amp;verbos,&amp;vc,&amp;dt,&amp;et,desc,&amp;desclen,&amp;bind,&amp;ro,&amp;ct,&amp;at);
</span><br>
<span class="quotelev2">&gt; &gt;               CHECKERR(&quot;PVARINFO&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;               if (verbos&lt;=verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       if (!longlist)
</span><br>
<span class="quotelev2">&gt; &gt;                       {
</span><br>
<span class="quotelev2">&gt; &gt;                               print_filled(name,maxnamelen,' ');
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_verbosity_short(verbos);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_class(vc);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_type(dt);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_bind(bind);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_yesno(ro);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_yesno(ct);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_yesno(at);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;                       else
</span><br>
<span class="quotelev2">&gt; &gt;                       {
</span><br>
<span class="quotelev2">&gt; &gt;                               print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Name: %s (&quot;,name); print_verbosity(verbos);printf(&quot;)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Class: &quot;); print_class(vc); printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Type:  &quot;); print_type(dt); printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Bind:  &quot;); print_bind(bind); printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Attr.: &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Readonly:&quot;);print_yesno(ro);printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Cont.:&quot;);print_yesno(ct);printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Atomic:&quot;);print_yesno(at);printf(&quot;\n\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               if (desc!=NULL)
</span><br>
<span class="quotelev2">&gt; &gt;                                       printf(&quot;%s\n\n&quot;,desc);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (numvars&gt;0)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               if (!longlist)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;               else
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* free buffers */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       free(name);
</span><br>
<span class="quotelev2">&gt; &gt;       free(desc);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Print all Control Variables */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void list_cvars()
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       int num,err,i,numvars;
</span><br>
<span class="quotelev2">&gt; &gt;       char *name, *desc;
</span><br>
<span class="quotelev2">&gt; &gt;       int bind,verbos,scope;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Datatype dt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_T_enum et;
</span><br>
<span class="quotelev2">&gt; &gt;       int maxnamelen=strlen(&quot;Variable&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       int maxdesclen=0;
</span><br>
<span class="quotelev2">&gt; &gt;       int prtlen;
</span><br>
<span class="quotelev2">&gt; &gt;       int namelen,desclen;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       int v_int;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned int v_uint;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned long v_ulong;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned long long v_ullong;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Count v_count;
</span><br>
<span class="quotelev2">&gt; &gt;       char v_char;
</span><br>
<span class="quotelev2">&gt; &gt;       double v_double;
</span><br>
<span class="quotelev2">&gt; &gt;       char value[100];
</span><br>
<span class="quotelev2">&gt; &gt;       int value_sup;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_T_cvar_handle handle=MPI_T_CVAR_HANDLE_NULL;
</span><br>
<span class="quotelev2">&gt; &gt;       int count;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Get number of variables */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       err=MPI_T_pvar_get_num(&amp;num);
</span><br>
<span class="quotelev2">&gt; &gt;       CHECKERR(&quot;CVARNUM&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Found %i control variables\n&quot;,num);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Find string sizes */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       numvars=0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for (i=0; i&lt;num; i++)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               int namelen=0;
</span><br>
<span class="quotelev2">&gt; &gt;               int desclen=0;
</span><br>
<span class="quotelev2">&gt; &gt;               char fname[5];
</span><br>
<span class="quotelev2">&gt; &gt;               char fdesc[5];
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_T_cvar_get_info(i,fname,&amp;namelen,&amp;verbos,&amp;dt,&amp;et,fdesc,&amp;desclen,&amp;bind,&amp;scope);
</span><br>
<span class="quotelev2">&gt; &gt;               if (namelen&gt;maxnamelen) maxnamelen=namelen;
</span><br>
<span class="quotelev2">&gt; &gt;               if (desclen&gt;maxdesclen) maxdesclen=desclen;
</span><br>
<span class="quotelev2">&gt; &gt;               if (verbos&lt;=verbosity) numvars++;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Found %i control variables with verbosity &lt;= &quot;,numvars);
</span><br>
<span class="quotelev2">&gt; &gt;       print_verbosity_short(verbosity);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;\n\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Allocate string buffers */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       name=(char*)malloc(sizeof(char)*maxnamelen);
</span><br>
<span class="quotelev2">&gt; &gt;       CHECKERR(&quot;Malloc Name&quot;,name==NULL);
</span><br>
<span class="quotelev2">&gt; &gt;       desc=(char*)malloc(sizeof(char)*maxdesclen);
</span><br>
<span class="quotelev2">&gt; &gt;       CHECKERR(&quot;Malloc Desc&quot;,desc==NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Print header */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       prtlen=0;
</span><br>
<span class="quotelev2">&gt; &gt;       if (!longlist)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               print_filled(&quot;Variable&quot;,maxnamelen,' ');
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen=maxnamelen+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;VRB  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=5+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Type  &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=6+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Bind    &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=8+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Scope   &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=8+1;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Value&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               prtlen+=12;
</span><br>
<span class="quotelev2">&gt; &gt;               print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Loop and print */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for (i=0; i&lt;num; i++)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               namelen=maxnamelen;
</span><br>
<span class="quotelev2">&gt; &gt;               desclen=maxdesclen;
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_T_cvar_get_info(i,name,&amp;namelen,&amp;verbos,&amp;dt,&amp;et,desc,&amp;desclen,&amp;bind,&amp;scope);
</span><br>
<span class="quotelev2">&gt; &gt;               CHECKERR(&quot;CVARINFO&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               value_sup=1;
</span><br>
<span class="quotelev2">&gt; &gt;               if (bind==MPI_T_BIND_NO_OBJECT)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       err=MPI_T_cvar_handle_alloc(i,NULL,&amp;handle,&amp;count);
</span><br>
<span class="quotelev2">&gt; &gt;                       CHECKERR(&quot;CVAR-ALLOC&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;               else if (bind==MPI_T_BIND_MPI_COMM)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       MPI_Comm comm=MPI_COMM_WORLD;
</span><br>
<span class="quotelev2">&gt; &gt;                       err=MPI_T_cvar_handle_alloc(i,&amp;comm,&amp;handle,&amp;count);
</span><br>
<span class="quotelev2">&gt; &gt;                       CHECKERR(&quot;CVAR-ALLOC&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;               else
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       value_sup=0;
</span><br>
<span class="quotelev2">&gt; &gt;                       sprintf(value,&quot;unsupported&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               if (value_sup)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       if (count==1)
</span><br>
<span class="quotelev2">&gt; &gt;                       {
</span><br>
<span class="quotelev2">&gt; &gt;                               if (dt==MPI_INT)
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       err=MPI_T_cvar_read(handle,&amp;v_int);
</span><br>
<span class="quotelev2">&gt; &gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;                                       if (et==MPI_T_ENUM_NULL)
</span><br>
<span class="quotelev2">&gt; &gt;                                       {
</span><br>
<span class="quotelev2">&gt; &gt;                                               sprintf(value,&quot;%i&quot;,v_int);
</span><br>
<span class="quotelev2">&gt; &gt;                                       }
</span><br>
<span class="quotelev2">&gt; &gt;                                       else
</span><br>
<span class="quotelev2">&gt; &gt;                                       {
</span><br>
<span class="quotelev2">&gt; &gt;                                               int i,etnum;
</span><br>
<span class="quotelev2">&gt; &gt;                                               char etname[20];
</span><br>
<span class="quotelev2">&gt; &gt;                                               int etlen=20;
</span><br>
<span class="quotelev2">&gt; &gt;                                               int done=0;
</span><br>
<span class="quotelev2">&gt; &gt;                                               int newval;
</span><br>
<span class="quotelev2">&gt; &gt;                                               err=MPI_T_enum_get_info(et,&amp;etnum,etname,&amp;etlen);
</span><br>
<span class="quotelev2">&gt; &gt;                                               for (i=0; i&lt;etnum; i++)
</span><br>
<span class="quotelev2">&gt; &gt;                                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                                       etlen=12;
</span><br>
<span class="quotelev2">&gt; &gt;                                                       err=MPI_T_enum_get_item(et,i,&amp;newval,etname,&amp;etlen);
</span><br>
<span class="quotelev2">&gt; &gt;                                                       if (newval==v_int)
</span><br>
<span class="quotelev2">&gt; &gt;                                                       {
</span><br>
<span class="quotelev2">&gt; &gt;                                                               printf(&quot;%s&quot;,etname);
</span><br>
<span class="quotelev2">&gt; &gt;                                                               done=1;
</span><br>
<span class="quotelev2">&gt; &gt;                                                       }
</span><br>
<span class="quotelev2">&gt; &gt;                                               }
</span><br>
<span class="quotelev2">&gt; &gt;                                               if (!done)
</span><br>
<span class="quotelev2">&gt; &gt;                                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                                       printf(&quot;unknown&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                                               }
</span><br>
<span class="quotelev2">&gt; &gt;                                       }
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                               else if (dt==MPI_UNSIGNED)
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       err=MPI_T_cvar_read(handle,&amp;v_uint);
</span><br>
<span class="quotelev2">&gt; &gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;                                       sprintf(value,&quot;%u&quot;,v_uint);
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                               else if (dt==MPI_UNSIGNED_LONG)
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       err=MPI_T_cvar_read(handle,&amp;v_ulong);
</span><br>
<span class="quotelev2">&gt; &gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;                                       sprintf(value,&quot;%lu&quot;,v_ulong);
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                               else if (dt==MPI_UNSIGNED_LONG_LONG)
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       err=MPI_T_cvar_read(handle,&amp;v_ullong);
</span><br>
<span class="quotelev2">&gt; &gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;                                       sprintf(value,&quot;%llu&quot;,v_ullong);
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                               else if (dt==MPI_COUNT)
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       err=MPI_T_cvar_read(handle,&amp;v_count);
</span><br>
<span class="quotelev2">&gt; &gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;                                       sprintf(value,&quot;%lu&quot;,v_count);
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                               else if (dt==MPI_CHAR)
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       err=MPI_T_cvar_read(handle,&amp;v_char);
</span><br>
<span class="quotelev2">&gt; &gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;                                       sprintf(value,&quot;%c&quot;,v_char);
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                               else if (dt==MPI_DOUBLE)
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       err=MPI_T_cvar_read(handle,&amp;v_double);
</span><br>
<span class="quotelev2">&gt; &gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;                                       sprintf(value,&quot;%d&quot;,v_double);
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                               else
</span><br>
<span class="quotelev2">&gt; &gt;                               {
</span><br>
<span class="quotelev2">&gt; &gt;                                       value_sup=0;
</span><br>
<span class="quotelev2">&gt; &gt;                                       sprintf(value,&quot;unsupported&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               }
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;                       else
</span><br>
<span class="quotelev2">&gt; &gt;                       {
</span><br>
<span class="quotelev2">&gt; &gt;                               value_sup=0;
</span><br>
<span class="quotelev2">&gt; &gt;                               sprintf(value,&quot;unsupported&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               if (handle==MPI_T_CVAR_HANDLE_NULL)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       MPI_T_cvar_handle_free(&amp;handle);
</span><br>
<span class="quotelev2">&gt; &gt;                       CHECKERR(&quot;CVAR-FREE&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               if (verbos&lt;=verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       if (!longlist)
</span><br>
<span class="quotelev2">&gt; &gt;                       {
</span><br>
<span class="quotelev2">&gt; &gt;                               print_filled(name,maxnamelen,' ');
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_verbosity_short(verbos);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_type(dt);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_bind(bind);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               print_scope(scope);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot; &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;%s&quot;,value);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;                       else
</span><br>
<span class="quotelev2">&gt; &gt;                       {
</span><br>
<span class="quotelev2">&gt; &gt;                               print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Name: %s (&quot;,name); print_verbosity(verbos);printf(&quot;)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Type:  &quot;); print_type(dt); printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Bind:  &quot;); print_bind(bind); printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Scope: &quot;);print_scope(scope);printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Value: %s\n\n&quot;,value);
</span><br>
<span class="quotelev2">&gt; &gt;                               if (desc!=NULL)
</span><br>
<span class="quotelev2">&gt; &gt;                                       printf(&quot;%s\n\n&quot;,desc);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (numvars&gt;0)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               if (!longlist)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;               else
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* free buffers */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       free(name);
</span><br>
<span class="quotelev2">&gt; &gt;       free(desc);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Main */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       int err,errarg;
</span><br>
<span class="quotelev2">&gt; &gt;       int threadsupport,threadsupport_t;
</span><br>
<span class="quotelev2">&gt; &gt;       int rank;
</span><br>
<span class="quotelev2">&gt; &gt;       int opt,erropt;
</span><br>
<span class="quotelev2">&gt; &gt;       int reqthread=MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Read options */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       verbosity=MPI_T_VERBOSITY_MPIDEV_ALL;
</span><br>
<span class="quotelev2">&gt; &gt;       list_pvar=1;
</span><br>
<span class="quotelev2">&gt; &gt;       list_cvar=1;
</span><br>
<span class="quotelev2">&gt; &gt;       longlist=0;
</span><br>
<span class="quotelev2">&gt; &gt;       runmpi=1;
</span><br>
<span class="quotelev2">&gt; &gt;       errarg=0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       while ((opt=getopt(argc,argv, &quot;hv:pclim&quot;)) != -1 ) {
</span><br>
<span class="quotelev2">&gt; &gt;               switch (opt) {
</span><br>
<span class="quotelev2">&gt; &gt;               case 'h':
</span><br>
<span class="quotelev2">&gt; &gt;                       errarg=-1;
</span><br>
<span class="quotelev2">&gt; &gt;                       break;
</span><br>
<span class="quotelev2">&gt; &gt;               case 'v':
</span><br>
<span class="quotelev2">&gt; &gt;                       switch (atoi(optarg)) {
</span><br>
<span class="quotelev2">&gt; &gt;                       case 1: verbosity=MPI_T_VERBOSITY_USER_BASIC; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 2: verbosity=MPI_T_VERBOSITY_USER_DETAIL; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 3: verbosity=MPI_T_VERBOSITY_USER_ALL; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 4: verbosity=MPI_T_VERBOSITY_TUNER_BASIC; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 5: verbosity=MPI_T_VERBOSITY_TUNER_DETAIL; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 6: verbosity=MPI_T_VERBOSITY_TUNER_ALL; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 7: verbosity=MPI_T_VERBOSITY_MPIDEV_BASIC; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 8: verbosity=MPI_T_VERBOSITY_MPIDEV_DETAIL; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 9: verbosity=MPI_T_VERBOSITY_MPIDEV_ALL; break;
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;                       break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 'p':
</span><br>
<span class="quotelev2">&gt; &gt;                               list_pvar=1;
</span><br>
<span class="quotelev2">&gt; &gt;                               list_cvar=0;
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 'c':
</span><br>
<span class="quotelev2">&gt; &gt;                               list_cvar=1;
</span><br>
<span class="quotelev2">&gt; &gt;                               list_pvar=0;
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 'l':
</span><br>
<span class="quotelev2">&gt; &gt;                               longlist=1;
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case 'm':
</span><br>
<span class="quotelev2">&gt; &gt;                               runmpi=0;
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       default:
</span><br>
<span class="quotelev2">&gt; &gt;                               errarg=1;
</span><br>
<span class="quotelev2">&gt; &gt;                               erropt=opt;
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Initialize */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (runmpi)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_Init_thread(&amp;argc,&amp;argv,reqthread,&amp;threadsupport);
</span><br>
<span class="quotelev2">&gt; &gt;               CHECKERR(&quot;Init&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;               CHECKERR(&quot;Rank&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else
</span><br>
<span class="quotelev2">&gt; &gt;               rank=0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* ONLY FOR RANK 0 */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (rank==0)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_T_init_thread(reqthread, &amp;threadsupport_t);
</span><br>
<span class="quotelev2">&gt; &gt;               CHECKERR(&quot;T_Init&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               if (errarg)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       if (errarg&gt;0)
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;Argument error: %c\n&quot;,erropt);
</span><br>
<span class="quotelev2">&gt; &gt;                       usage(errarg!=-1);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               /* Header */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;MPI_T Variable List\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               if (runmpi)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       /* Print thread support for MPI */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;  MPI Thread support: &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       switch (threadsupport) {
</span><br>
<span class="quotelev2">&gt; &gt;                       case MPI_THREAD_SINGLE:
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;MPI_THREAD_SINGLE\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case MPI_THREAD_FUNNELED:
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;MPI_THREAD_FUNNELED\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case MPI_THREAD_SERIALIZED:
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;MPI_THREAD_SERIALIZED\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       case MPI_THREAD_MULTIPLE:
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;MPI_THREAD_MULTIPLE\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                               break;
</span><br>
<span class="quotelev2">&gt; &gt;                       default:
</span><br>
<span class="quotelev2">&gt; &gt;                               printf(&quot;unknown (%i)\n&quot;,threadsupport);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               /* Print thread support for MPI_T */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;  MPI_T Thread support: &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               switch (threadsupport_t) {
</span><br>
<span class="quotelev2">&gt; &gt;               case MPI_THREAD_SINGLE:
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;MPI_THREAD_SINGLE\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       break;
</span><br>
<span class="quotelev2">&gt; &gt;               case MPI_THREAD_FUNNELED:
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;MPI_THREAD_FUNNELED\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       break;
</span><br>
<span class="quotelev2">&gt; &gt;               case MPI_THREAD_SERIALIZED:
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;MPI_THREAD_SERIALIZED\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       break;
</span><br>
<span class="quotelev2">&gt; &gt;               case MPI_THREAD_MULTIPLE:
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;MPI_THREAD_MULTIPLE\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       break;
</span><br>
<span class="quotelev2">&gt; &gt;               default:
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;unknown (%i)\n&quot;,threadsupport_t);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               /* Start MPI_T */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               if (list_cvar)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n===============================\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;Control Variables&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n===============================\n\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       list_cvars();
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               if (list_pvar)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n===============================\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;Performance Variables&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n===============================\n\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                       list_pvars();
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Clean up */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (runmpi)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt;               err=MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;               CHECKERR(&quot;Barrier&quot;,err);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (rank==0)
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_T_finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (runmpi)
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (rank==0)
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Done.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24762.php">http://www.open-mpi.org/community/lists/users/2014/07/24762.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24791.php">http://www.open-mpi.org/community/lists/users/2014/07/24791.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24792/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24793.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24791.php">Gallardo, Esthela: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24791.php">Gallardo, Esthela: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
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
