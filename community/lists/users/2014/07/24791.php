<?
$subject_val = "Re: [OMPI users] MPI_T Control Variables";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 12:22:58 2014" -->
<!-- isoreceived="20140716162258" -->
<!-- sent="Wed, 16 Jul 2014 16:22:55 +0000" -->
<!-- isosent="20140716162255" -->
<!-- name="Gallardo, Esthela" -->
<!-- email="egallardo5_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_T Control Variables" -->
<!-- id="1405527775308.53587_at_miners.utep.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140711173305.GD1506_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Gallardo, Esthela (<em>egallardo5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 12:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24790.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey, 

Sorry I wasn't able to follow up. I did try varlist and the code I have with trunk and 1.8.2, but I am still encountering errors. I'm debating if it's due to how I am running the application. I use the following command:

mpirun  -np 16 -hostfile hosts --mca btl openib,self ./varlist

Is this correct? 

Thank you,

Esthela Gallardo 
________________________________________
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
Sent: Friday, July 11, 2014 11:33 AM
To: Open MPI Users
Subject: Re: [OMPI users] MPI_T Control Variables

Ignore that. Their version is ok. The one I have looks like it is out of
date. Just tested theirs with trunk.

-Nathan

On Fri, Jul 11, 2014 at 11:27:42AM -0600, Nathan Hjelm wrote:
&gt;
&gt; Hmm, looks like the varlist fixes I provided to LLNL haven't made it
&gt; into their git repo. Use the attached version with 1.8.2.
&gt;
&gt; -Nathan
&gt;
&gt; On Fri, Jul 11, 2014 at 05:04:07PM +0000, Gallardo, Esthela wrote:
&gt; &gt; Hi Nathan,
&gt; &gt;
&gt; &gt; Where can I access the 1.8.2 tarball? I'm not sure if you meant to include it as an attachment. If so, then it did not go through.
&gt; &gt;
&gt; &gt; Thank you,
&gt; &gt;
&gt; &gt; Esthela Gallardo
&gt; &gt; ________________________________________
&gt; &gt; From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
&gt; &gt; Sent: Friday, July 11, 2014 10:50 AM
&gt; &gt; To: Open MPI Users
&gt; &gt; Subject: Re: [OMPI users] MPI_T Control Variables
&gt; &gt;
&gt; &gt; Can you try with a 1.8.2 nightly tarball or the trunk? I fixed a couple
&gt; &gt; of bugs that varlist discovered (also found some in varlist).
&gt; &gt;
&gt; &gt; -Nathan Hjelm
&gt; &gt; HPC-5, LANL
&gt; &gt;
&gt; &gt; On Fri, Jul 11, 2014 at 04:42:01PM +0000, Gallardo, Esthela wrote:
&gt; &gt; &gt;    Hi,
&gt; &gt; &gt;
&gt; &gt; &gt;    I am new to the MPI_T interface, and was trying to run an applications
&gt; &gt; &gt;    developed by LLNL which queries and lists the values of the control
&gt; &gt; &gt;    variables available. The tool can be downloaded from the following site:
&gt; &gt; &gt;
&gt; &gt; &gt;    <a href="https://computation-rnd.llnl.gov/mpi_t/varList.php">https://computation-rnd.llnl.gov/mpi_t/varList.php</a>
&gt; &gt; &gt;
&gt; &gt; &gt;    I noticed that when I ran the tool, I would encounter the following
&gt; &gt; &gt;    error:
&gt; &gt; &gt;
&gt; &gt; &gt;    [c557-604:121075] Signal: Segmentation fault (11)
&gt; &gt; &gt;    [c557-604:121075] Signal code: Invalid permissions (2)
&gt; &gt; &gt;    [c557-604:121075] Failing at address: 0x2b54ce9d1418
&gt; &gt; &gt;    [c557-604:121075] [ 0] /lib64/libpthread.so.0[0x397060f710]
&gt; &gt; &gt;    [c557-604:121075] [ 1]
&gt; &gt; &gt;    /work/02282/esthela/MPI/install-openmpi-1.8.1/lib/libmpi.so.1(MPI_T_cvar_read+0xc6)[0x2b54cbe55bd6]
&gt; &gt; &gt;    [c557-604:121075] [ 2] ./varlist(list_cvars+0xda7)[0x402e17]
&gt; &gt; &gt;    [c557-604:121075] [ 3] ./varlist(main+0x347)[0x401e37]
&gt; &gt; &gt;    [c557-604:121075] [ 4]
&gt; &gt; &gt;    /lib64/libc.so.6(__libc_start_main+0xfd)[0x396fe1ed1d]
&gt; &gt; &gt;    [c557-604:121075] [ 5] ./varlist[0x401a29]
&gt; &gt; &gt;    [c557-604:121075] *** End of error message ***
&gt; &gt; &gt;    I went ahead and tried to write a code that follows the process in varlist
&gt; &gt; &gt;    to read the control variables, and encountered the same error when I
&gt; &gt; &gt;    called the following function:
&gt; &gt; &gt;    err=MPI_T_cvar_read(handle,val);
&gt; &gt; &gt;
&gt; &gt; &gt;    Through a recommendation, I ran both my code and the tool using mvapich,
&gt; &gt; &gt;    and could not reproduce the error. I don't know if this is a bug or if I
&gt; &gt; &gt;    didn't configure my installation of OpenMPI correctly. Below is a script
&gt; &gt; &gt;    that I used to install OpenMPI:
&gt; &gt; &gt;
&gt; &gt; &gt;    set -e
&gt; &gt; &gt;    rm -fr /work/02282/esthela/MPI/install-openmpi-1.8.1 &amp;&amp; \
&gt; &gt; &gt;    make clean &amp;&amp; \
&gt; &gt; &gt;    ./configure --with-cma=yes
&gt; &gt; &gt;    --prefix=/work/02282/esthela/MPI/install-openmpi-1.8.1 \
&gt; &gt; &gt;    CC=icc CXX=icpc FC=ifort --enable-shared CFLAGS=&quot;-O3 -ip -xHost&quot; \
&gt; &gt; &gt;    CXXFLAGS=&quot;-O3 -ip -xHost&quot; --without-slurm --disable-vt
&gt; &gt; &gt;    --with-verbs=/opt/ofed \
&gt; &gt; &gt;    --with-verbs-libdir=/opt/ofed/lib64 &amp;&amp; \
&gt; &gt; &gt;    make clean &amp;&amp; \
&gt; &gt; &gt;    make -j4 &amp;&amp; \
&gt; &gt; &gt;    make install&amp;#8203;
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt;    Help in resolving this issue would be greatly appreciated.
&gt; &gt; &gt;
&gt; &gt; &gt;    Thank you!
&gt; &gt; &gt;
&gt; &gt; &gt;    Esthela Gallardo
&gt; &gt;
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24758.php">http://www.open-mpi.org/community/lists/users/2014/07/24758.php</a>
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24760.php">http://www.open-mpi.org/community/lists/users/2014/07/24760.php</a>

&gt; #include &lt;stdio.h&gt;
&gt; #include &lt;stdlib.h&gt;
&gt; #include &lt;unistd.h&gt;
&gt; #include &lt;getopt.h&gt;
&gt; #include &lt;string.h&gt;
&gt;
&gt; #include &lt;mpi.h&gt;
&gt;
&gt; #define SCREENLEN 78
&gt;
&gt; #ifndef MPI_COUNT
&gt; #define MPI_COUNT MPI_INT
&gt; typedef int MPI_Count;
&gt; #endif
&gt;
&gt; #ifndef MPI_T_CVAR_HANDLE_NULL
&gt; #define MPI_T_CVAR_HANDLE_NULL NULL
&gt; #endif
&gt;
&gt; #define CHECKERR(errstr,err) if (err!=MPI_SUCCESS) { printf(&quot;ERROR: %s: MPI error code %i\n&quot;,errstr,err); usage(1); }
&gt;
&gt; int list_pvar,list_cvar,longlist,verbosity,runmpi;
&gt;
&gt; #define RUNMPI 1
&gt;
&gt; /* Usage */
&gt;
&gt; void usage(int e)
&gt; {
&gt;       printf(&quot;Usage: varlist [-c] [-p] [-v &lt;VL&gt;] [-l] [-m]\n&quot;);
&gt;       printf(&quot;    -c = List only Control Variables\n&quot;);
&gt;       printf(&quot;    -p = List only Performance Variables\n&quot;);
&gt;       printf(&quot;    -v = List up to verbosity level &lt;VL&gt; (1=U/B to 9=D/D)\n&quot;);
&gt;       printf(&quot;    -l = Long list with all information, incl. descriptions\n&quot;);
&gt;       printf(&quot;    -m = Do not call MPI_Init before listing variables\n&quot;);
&gt;       printf(&quot;    -h = This help text\n&quot;);
&gt;       exit(e);
&gt; }
&gt;
&gt;
&gt; /* Print a filled string */
&gt;
&gt; void print_filled(char *s, int len, char c)
&gt; {
&gt;       int i;
&gt;       printf(&quot;%s&quot;,s);
&gt;       for (i=strlen(s); i&lt;len; i++)
&gt;               printf(&quot;%c&quot;,c);
&gt; }
&gt;
&gt;
&gt; /* Print a PVAR class */
&gt;
&gt; void print_class(int c)
&gt; {
&gt;       switch(c) {
&gt;       case MPI_T_PVAR_CLASS_STATE:
&gt;               printf(&quot;STATE  &quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_LEVEL:
&gt;               printf(&quot;LEVEL  &quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_SIZE:
&gt;               printf(&quot;SIZE   &quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_PERCENTAGE:
&gt;               printf(&quot;PERCENT&quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_HIGHWATERMARK:
&gt;               printf(&quot;HIGHWAT&quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_LOWWATERMARK:
&gt;               printf(&quot;LOWWAT &quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_COUNTER:
&gt;               printf(&quot;COUNTER&quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_AGGREGATE:
&gt;               printf(&quot;AGGR   &quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_TIMER:
&gt;               printf(&quot;TIMER  &quot;);
&gt;               break;
&gt;       case MPI_T_PVAR_CLASS_GENERIC:
&gt;               printf(&quot;GENERIC&quot;);
&gt;               break;
&gt;       default:
&gt;               printf(&quot;UNKNOWN&quot;);
&gt;               break;
&gt;       }
&gt; }
&gt;
&gt;
&gt; /* Print a CVAR/PVAR bind */
&gt;
&gt; void print_bind(int b)
&gt; {
&gt;       switch (b) {
&gt;       case MPI_T_BIND_NO_OBJECT:
&gt;               printf(&quot;n/a     &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_COMM:
&gt;               printf(&quot;COMM    &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_DATATYPE:
&gt;               printf(&quot;DATATYPE&quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_ERRHANDLER:
&gt;               printf(&quot;ERRHAND &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_FILE:
&gt;               printf(&quot;FILE    &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_GROUP:
&gt;               printf(&quot;GROUP   &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_OP:
&gt;               printf(&quot;OP      &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_REQUEST:
&gt;               printf(&quot;REQUEST &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_WIN:
&gt;               printf(&quot;WINDOW  &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_MESSAGE:
&gt;               printf(&quot;MESSAGE &quot;);
&gt;               break;
&gt;       case MPI_T_BIND_MPI_INFO:
&gt;               printf(&quot;INFO    &quot;);
&gt;               break;
&gt;       default:
&gt;               printf(&quot;UNKNOWN &quot;);
&gt;               break;
&gt;       }
&gt; }
&gt;
&gt;
&gt; /* Print a CVAR/PVAR type */
&gt;
&gt; void print_type(MPI_Datatype t)
&gt; {
&gt;       if (t==MPI_INT)
&gt;       {
&gt;               printf(&quot;INT   &quot;);
&gt;       }
&gt;       else if (t==MPI_UNSIGNED)
&gt;       {
&gt;               printf(&quot;UINT  &quot;);
&gt;       }
&gt;       else if (t==MPI_UNSIGNED_LONG)
&gt;       {
&gt;               printf(&quot;ULONG &quot;);
&gt;       }
&gt;       else if (t==MPI_UNSIGNED_LONG_LONG)
&gt;       {
&gt;               printf(&quot;ULLONG&quot;);
&gt;       }
&gt;       else if (t==MPI_COUNT)
&gt;       {
&gt;               printf(&quot;COUNT &quot;);
&gt;       }
&gt;       else if (t==MPI_CHAR)
&gt;       {
&gt;               printf(&quot;CHAR  &quot;);
&gt;       }
&gt;       else if (t==MPI_DOUBLE)
&gt;       {
&gt;               printf(&quot;DOUBLE&quot;);
&gt;       }
&gt;       else
&gt;       {
&gt;               printf(&quot;UNKNOW&quot;);
&gt;       }
&gt; }
&gt;
&gt;
&gt; /* Print CVAR Scope */
&gt;
&gt; void print_scope(int s)
&gt; {
&gt;       switch (s) {
&gt; #if 0
&gt;       case MPI_T_SCOPE_CONSTANT:
&gt;               printf(&quot;CONST   &quot;);
&gt;               break;
&gt; #endif
&gt;       case MPI_T_SCOPE_READONLY:
&gt;               printf(&quot;READONLY&quot;);
&gt;               break;
&gt;       case MPI_T_SCOPE_LOCAL:
&gt;               printf(&quot;LOCAL   &quot;);
&gt;               break;
&gt;       case MPI_T_SCOPE_GROUP:
&gt;               printf(&quot;GROUP   &quot;);
&gt;               break;
&gt;       case MPI_T_SCOPE_GROUP_EQ:
&gt;               printf(&quot;GROUP-EQ&quot;);
&gt;               break;
&gt;       case MPI_T_SCOPE_ALL:
&gt;               printf(&quot;ALL-EQ  &quot;);
&gt;               break;
&gt;       case MPI_T_SCOPE_ALL_EQ:
&gt;               printf(&quot;ALL     &quot;);
&gt;               break;
&gt;       default:
&gt;               printf(&quot;UNKNOWN &quot;);
&gt;               break;
&gt;       }
&gt; }
&gt;
&gt;
&gt; /* Print a Yes/No class */
&gt;
&gt; void print_yesno(int yesno)
&gt; {
&gt;       if (yesno)
&gt;               printf(&quot;YES&quot;);
&gt;       else
&gt;               printf(&quot; NO&quot;);
&gt; }
&gt;
&gt;
&gt; /* Print verbosity level */
&gt;
&gt; void print_verbosity(int verbos)
&gt; {
&gt;       switch (verbos) {
&gt;       case MPI_T_VERBOSITY_USER_BASIC:
&gt;               printf(&quot;User/Basic = 1&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_USER_DETAIL:
&gt;               printf(&quot;User/Detail = 2&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_USER_ALL:
&gt;               printf(&quot;User/All = 3&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_TUNER_BASIC:
&gt;               printf(&quot;Tuner/Basic = 4&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_TUNER_DETAIL:
&gt;               printf(&quot;Tuner/Detail = 5&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_TUNER_ALL:
&gt;               printf(&quot;Tuner/All = 6&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_MPIDEV_BASIC:
&gt;               printf(&quot;Developer/Basic = 7&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_MPIDEV_DETAIL:
&gt;               printf(&quot;Developer/Detail = 8&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_MPIDEV_ALL:
&gt;               printf(&quot;Developer/All = 9&quot;);
&gt;               break;
&gt;       default:
&gt;               printf(&quot;UNKNOWN&quot;);
&gt;               break;
&gt;       }
&gt; }
&gt;
&gt;
&gt; void print_verbosity_short(int verbos)
&gt; {
&gt;       switch (verbos) {
&gt;       case MPI_T_VERBOSITY_USER_BASIC:
&gt;               printf(&quot;U/B-1&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_USER_DETAIL:
&gt;               printf(&quot;U/D-2&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_USER_ALL:
&gt;               printf(&quot;U/A-3&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_TUNER_BASIC:
&gt;               printf(&quot;T/B-4&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_TUNER_DETAIL:
&gt;               printf(&quot;T/D-5&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_TUNER_ALL:
&gt;               printf(&quot;T/A-6&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_MPIDEV_BASIC:
&gt;               printf(&quot;D/B-7&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_MPIDEV_DETAIL:
&gt;               printf(&quot;D/D-8&quot;);
&gt;               break;
&gt;       case MPI_T_VERBOSITY_MPIDEV_ALL:
&gt;               printf(&quot;D/A-9&quot;);
&gt;               break;
&gt;       default:
&gt;               printf(&quot;?????&quot;);
&gt;               break;
&gt;       }
&gt; }
&gt;
&gt;
&gt; /* Print all Performance Variables */
&gt;
&gt; void list_pvars()
&gt; {
&gt;       int num,err,i,numvars;
&gt;       char *name, *desc;
&gt;       int bind,vc,verbos,ro,ct,at;
&gt;       MPI_Datatype dt;
&gt;       MPI_T_enum et;
&gt;       int maxnamelen=strlen(&quot;Variable&quot;);
&gt;       int maxdesclen=0;
&gt;       int prtlen;
&gt;       int namelen,desclen;
&gt;
&gt;
&gt;       /* Get number of variables */
&gt;
&gt;       err=MPI_T_pvar_get_num(&amp;num);
&gt;       CHECKERR(&quot;PVARNUM&quot;,err);
&gt;       printf(&quot;Found %i performance variables\n&quot;,num);
&gt;
&gt;
&gt;       /* Find string sizes */
&gt;
&gt;       numvars=0;
&gt;
&gt;       for (i=0; i&lt;num; i++)
&gt;       {
&gt;               int namelen=0;
&gt;               int desclen=0;
&gt;               char fname[5];
&gt;               char fdesc[5];
&gt;               err=MPI_T_pvar_get_info(i,fname,&amp;namelen,&amp;verbos,&amp;vc,&amp;dt,&amp;et,fdesc,&amp;desclen,&amp;bind,&amp;ro,&amp;ct,&amp;at);
&gt;               if (namelen&gt;maxnamelen) maxnamelen=namelen;
&gt;               if (desclen&gt;maxdesclen) maxdesclen=desclen;
&gt;               if (verbos&lt;=verbosity) numvars++;
&gt;       }
&gt;
&gt;       printf(&quot;Found %i performance variables with verbosity &lt;= &quot;,numvars);
&gt;       print_verbosity_short(verbosity);
&gt;       printf(&quot;\n\n&quot;);
&gt;
&gt;
&gt;       /* Allocate string buffers */
&gt;
&gt;       name=(char*)malloc(sizeof(char)*maxnamelen);
&gt;       CHECKERR(&quot;Malloc Name&quot;,name==NULL);
&gt;       desc=(char*)malloc(sizeof(char)*maxdesclen);
&gt;       CHECKERR(&quot;Malloc Desc&quot;,desc==NULL);
&gt;
&gt;       /* Print header */
&gt;
&gt;       prtlen=0;
&gt;       if (!longlist)
&gt;       {
&gt;               print_filled(&quot;Variable&quot;,maxnamelen,' ');
&gt;               printf(&quot; &quot;);
&gt;               prtlen=maxnamelen+1;
&gt;               printf(&quot;VRB  &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=5+1;
&gt;               printf(&quot;Class  &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=7+1;
&gt;               printf(&quot;Type  &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=6+1;
&gt;               printf(&quot;Bind    &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=8+1;
&gt;               printf(&quot;R/O&quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=3+1;
&gt;               printf(&quot;CNT&quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=3+1;
&gt;               printf(&quot;ATM&quot;);
&gt;               printf(&quot;\n&quot;);
&gt;               prtlen+=3;
&gt;               print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
&gt;       }
&gt;
&gt;
&gt;       /* Loop and print */
&gt;
&gt;       for (i=0; i&lt;num; i++)
&gt;       {
&gt;               namelen=maxnamelen;
&gt;               desclen=maxdesclen;
&gt;               err=MPI_T_pvar_get_info(i,name,&amp;namelen,&amp;verbos,&amp;vc,&amp;dt,&amp;et,desc,&amp;desclen,&amp;bind,&amp;ro,&amp;ct,&amp;at);
&gt;               CHECKERR(&quot;PVARINFO&quot;,err);
&gt;               if (verbos&lt;=verbosity)
&gt;               {
&gt;                       if (!longlist)
&gt;                       {
&gt;                               print_filled(name,maxnamelen,' ');
&gt;                               printf(&quot; &quot;);
&gt;                               print_verbosity_short(verbos);
&gt;                               printf(&quot; &quot;);
&gt;                               print_class(vc);
&gt;                               printf(&quot; &quot;);
&gt;                               print_type(dt);
&gt;                               printf(&quot; &quot;);
&gt;                               print_bind(bind);
&gt;                               printf(&quot; &quot;);
&gt;                               print_yesno(ro);
&gt;                               printf(&quot; &quot;);
&gt;                               print_yesno(ct);
&gt;                               printf(&quot; &quot;);
&gt;                               print_yesno(at);
&gt;                               printf(&quot;\n&quot;);
&gt;                       }
&gt;                       else
&gt;                       {
&gt;                               print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
&gt;                               printf(&quot;Name: %s (&quot;,name); print_verbosity(verbos);printf(&quot;)\n&quot;);
&gt;                               printf(&quot;Class: &quot;); print_class(vc); printf(&quot;\n&quot;);
&gt;                               printf(&quot;Type:  &quot;); print_type(dt); printf(&quot;\n&quot;);
&gt;                               printf(&quot;Bind:  &quot;); print_bind(bind); printf(&quot;\n&quot;);
&gt;                               printf(&quot;Attr.: &quot;);
&gt;                               printf(&quot;Readonly:&quot;);print_yesno(ro);printf(&quot; &quot;);
&gt;                               printf(&quot;Cont.:&quot;);print_yesno(ct);printf(&quot; &quot;);
&gt;                               printf(&quot;Atomic:&quot;);print_yesno(at);printf(&quot;\n\n&quot;);
&gt;                               if (desc!=NULL)
&gt;                                       printf(&quot;%s\n\n&quot;,desc);
&gt;                       }
&gt;               }
&gt;       }
&gt;
&gt;       if (numvars&gt;0)
&gt;       {
&gt;               if (!longlist)
&gt;               {
&gt;                       print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
&gt;               }
&gt;               else
&gt;               {
&gt;                       print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
&gt;               }
&gt;       }
&gt;
&gt;
&gt;       /* free buffers */
&gt;
&gt;       free(name);
&gt;       free(desc);
&gt; }
&gt;
&gt;
&gt; /* Print all Control Variables */
&gt;
&gt; void list_cvars()
&gt; {
&gt;       int num,err,i,numvars;
&gt;       char *name, *desc;
&gt;       int bind,verbos,scope;
&gt;       MPI_Datatype dt;
&gt;       MPI_T_enum et;
&gt;       int maxnamelen=strlen(&quot;Variable&quot;);
&gt;       int maxdesclen=0;
&gt;       int prtlen;
&gt;       int namelen,desclen;
&gt;
&gt;       int v_int;
&gt;       unsigned int v_uint;
&gt;       unsigned long v_ulong;
&gt;       unsigned long long v_ullong;
&gt;       MPI_Count v_count;
&gt;       char v_char;
&gt;       double v_double;
&gt;       char value[100];
&gt;       int value_sup;
&gt;       MPI_T_cvar_handle handle=MPI_T_CVAR_HANDLE_NULL;
&gt;       int count;
&gt;
&gt;       /* Get number of variables */
&gt;
&gt;       err=MPI_T_pvar_get_num(&amp;num);
&gt;       CHECKERR(&quot;CVARNUM&quot;,err);
&gt;       printf(&quot;Found %i control variables\n&quot;,num);
&gt;
&gt;
&gt;       /* Find string sizes */
&gt;
&gt;       numvars=0;
&gt;
&gt;       for (i=0; i&lt;num; i++)
&gt;       {
&gt;               int namelen=0;
&gt;               int desclen=0;
&gt;               char fname[5];
&gt;               char fdesc[5];
&gt;               err=MPI_T_cvar_get_info(i,fname,&amp;namelen,&amp;verbos,&amp;dt,&amp;et,fdesc,&amp;desclen,&amp;bind,&amp;scope);
&gt;               if (namelen&gt;maxnamelen) maxnamelen=namelen;
&gt;               if (desclen&gt;maxdesclen) maxdesclen=desclen;
&gt;               if (verbos&lt;=verbosity) numvars++;
&gt;       }
&gt;
&gt;       printf(&quot;Found %i control variables with verbosity &lt;= &quot;,numvars);
&gt;       print_verbosity_short(verbosity);
&gt;       printf(&quot;\n\n&quot;);
&gt;
&gt;       /* Allocate string buffers */
&gt;
&gt;       name=(char*)malloc(sizeof(char)*maxnamelen);
&gt;       CHECKERR(&quot;Malloc Name&quot;,name==NULL);
&gt;       desc=(char*)malloc(sizeof(char)*maxdesclen);
&gt;       CHECKERR(&quot;Malloc Desc&quot;,desc==NULL);
&gt;
&gt;
&gt;       /* Print header */
&gt;
&gt;       prtlen=0;
&gt;       if (!longlist)
&gt;       {
&gt;               print_filled(&quot;Variable&quot;,maxnamelen,' ');
&gt;               printf(&quot; &quot;);
&gt;               prtlen=maxnamelen+1;
&gt;               printf(&quot;VRB  &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=5+1;
&gt;               printf(&quot;Type  &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=6+1;
&gt;               printf(&quot;Bind    &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=8+1;
&gt;               printf(&quot;Scope   &quot;);
&gt;               printf(&quot; &quot;);
&gt;               prtlen+=8+1;
&gt;               printf(&quot;Value&quot;);
&gt;               printf(&quot;\n&quot;);
&gt;               prtlen+=12;
&gt;               print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
&gt;       }
&gt;
&gt;
&gt;       /* Loop and print */
&gt;
&gt;       for (i=0; i&lt;num; i++)
&gt;       {
&gt;               namelen=maxnamelen;
&gt;               desclen=maxdesclen;
&gt;               err=MPI_T_cvar_get_info(i,name,&amp;namelen,&amp;verbos,&amp;dt,&amp;et,desc,&amp;desclen,&amp;bind,&amp;scope);
&gt;               CHECKERR(&quot;CVARINFO&quot;,err);
&gt;
&gt;               value_sup=1;
&gt;               if (bind==MPI_T_BIND_NO_OBJECT)
&gt;               {
&gt;                       err=MPI_T_cvar_handle_alloc(i,NULL,&amp;handle,&amp;count);
&gt;                       CHECKERR(&quot;CVAR-ALLOC&quot;,err);
&gt;               }
&gt;               else if (bind==MPI_T_BIND_MPI_COMM)
&gt;               {
&gt;                       MPI_Comm comm=MPI_COMM_WORLD;
&gt;                       err=MPI_T_cvar_handle_alloc(i,&amp;comm,&amp;handle,&amp;count);
&gt;                       CHECKERR(&quot;CVAR-ALLOC&quot;,err);
&gt;               }
&gt;               else
&gt;               {
&gt;                       value_sup=0;
&gt;                       sprintf(value,&quot;unsupported&quot;);
&gt;               }
&gt;
&gt;               if (value_sup)
&gt;               {
&gt;                       if (count==1)
&gt;                       {
&gt;                               if (dt==MPI_INT)
&gt;                               {
&gt;                                       err=MPI_T_cvar_read(handle,&amp;v_int);
&gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
&gt;                                       if (et==MPI_T_ENUM_NULL)
&gt;                                       {
&gt;                                               sprintf(value,&quot;%i&quot;,v_int);
&gt;                                       }
&gt;                                       else
&gt;                                       {
&gt;                                               int i,etnum;
&gt;                                               char etname[20];
&gt;                                               int etlen=20;
&gt;                                               int done=0;
&gt;                                               int newval;
&gt;                                               err=MPI_T_enum_get_info(et,&amp;etnum,etname,&amp;etlen);
&gt;                                               for (i=0; i&lt;etnum; i++)
&gt;                                               {
&gt;                                                       etlen=12;
&gt;                                                       err=MPI_T_enum_get_item(et,i,&amp;newval,etname,&amp;etlen);
&gt;                                                       if (newval==v_int)
&gt;                                                       {
&gt;                                                               printf(&quot;%s&quot;,etname);
&gt;                                                               done=1;
&gt;                                                       }
&gt;                                               }
&gt;                                               if (!done)
&gt;                                               {
&gt;                                                       printf(&quot;unknown&quot;);
&gt;                                               }
&gt;                                       }
&gt;                               }
&gt;                               else if (dt==MPI_UNSIGNED)
&gt;                               {
&gt;                                       err=MPI_T_cvar_read(handle,&amp;v_uint);
&gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
&gt;                                       sprintf(value,&quot;%u&quot;,v_uint);
&gt;                               }
&gt;                               else if (dt==MPI_UNSIGNED_LONG)
&gt;                               {
&gt;                                       err=MPI_T_cvar_read(handle,&amp;v_ulong);
&gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
&gt;                                       sprintf(value,&quot;%lu&quot;,v_ulong);
&gt;                               }
&gt;                               else if (dt==MPI_UNSIGNED_LONG_LONG)
&gt;                               {
&gt;                                       err=MPI_T_cvar_read(handle,&amp;v_ullong);
&gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
&gt;                                       sprintf(value,&quot;%llu&quot;,v_ullong);
&gt;                               }
&gt;                               else if (dt==MPI_COUNT)
&gt;                               {
&gt;                                       err=MPI_T_cvar_read(handle,&amp;v_count);
&gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
&gt;                                       sprintf(value,&quot;%lu&quot;,v_count);
&gt;                               }
&gt;                               else if (dt==MPI_CHAR)
&gt;                               {
&gt;                                       err=MPI_T_cvar_read(handle,&amp;v_char);
&gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
&gt;                                       sprintf(value,&quot;%c&quot;,v_char);
&gt;                               }
&gt;                               else if (dt==MPI_DOUBLE)
&gt;                               {
&gt;                                       err=MPI_T_cvar_read(handle,&amp;v_double);
&gt;                                       CHECKERR(&quot;CVARREAD&quot;,err);
&gt;                                       sprintf(value,&quot;%d&quot;,v_double);
&gt;                               }
&gt;                               else
&gt;                               {
&gt;                                       value_sup=0;
&gt;                                       sprintf(value,&quot;unsupported&quot;);
&gt;                               }
&gt;                       }
&gt;                       else
&gt;                       {
&gt;                               value_sup=0;
&gt;                               sprintf(value,&quot;unsupported&quot;);
&gt;                       }
&gt;               }
&gt;
&gt;               if (handle==MPI_T_CVAR_HANDLE_NULL)
&gt;               {
&gt;                       MPI_T_cvar_handle_free(&amp;handle);
&gt;                       CHECKERR(&quot;CVAR-FREE&quot;,err);
&gt;               }
&gt;
&gt;               if (verbos&lt;=verbosity)
&gt;               {
&gt;                       if (!longlist)
&gt;                       {
&gt;                               print_filled(name,maxnamelen,' ');
&gt;                               printf(&quot; &quot;);
&gt;                               print_verbosity_short(verbos);
&gt;                               printf(&quot; &quot;);
&gt;                               print_type(dt);
&gt;                               printf(&quot; &quot;);
&gt;                               print_bind(bind);
&gt;                               printf(&quot; &quot;);
&gt;                               print_scope(scope);
&gt;                               printf(&quot; &quot;);
&gt;                               printf(&quot;%s&quot;,value);
&gt;                               printf(&quot;\n&quot;);
&gt;                       }
&gt;                       else
&gt;                       {
&gt;                               print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
&gt;                               printf(&quot;Name: %s (&quot;,name); print_verbosity(verbos);printf(&quot;)\n&quot;);
&gt;                               printf(&quot;Type:  &quot;); print_type(dt); printf(&quot;\n&quot;);
&gt;                               printf(&quot;Bind:  &quot;); print_bind(bind); printf(&quot;\n&quot;);
&gt;                               printf(&quot;Scope: &quot;);print_scope(scope);printf(&quot;\n&quot;);
&gt;                               printf(&quot;Value: %s\n\n&quot;,value);
&gt;                               if (desc!=NULL)
&gt;                                       printf(&quot;%s\n\n&quot;,desc);
&gt;                       }
&gt;               }
&gt;       }
&gt;
&gt;       if (numvars&gt;0)
&gt;       {
&gt;               if (!longlist)
&gt;               {
&gt;                       print_filled(&quot;&quot;,prtlen,'-');printf(&quot;\n&quot;);
&gt;               }
&gt;               else
&gt;               {
&gt;                       print_filled(&quot;&quot;,SCREENLEN,'-');printf(&quot;\n&quot;);
&gt;               }
&gt;       }
&gt;
&gt;
&gt;       /* free buffers */
&gt;
&gt;       free(name);
&gt;       free(desc);
&gt; }
&gt;
&gt;
&gt; /* Main */
&gt;
&gt; int main(int argc, char *argv[])
&gt; {
&gt;       int err,errarg;
&gt;       int threadsupport,threadsupport_t;
&gt;       int rank;
&gt;       int opt,erropt;
&gt;       int reqthread=MPI_THREAD_MULTIPLE;
&gt;
&gt;       /* Read options */
&gt;
&gt;       verbosity=MPI_T_VERBOSITY_MPIDEV_ALL;
&gt;       list_pvar=1;
&gt;       list_cvar=1;
&gt;       longlist=0;
&gt;       runmpi=1;
&gt;       errarg=0;
&gt;
&gt;       while ((opt=getopt(argc,argv, &quot;hv:pclim&quot;)) != -1 ) {
&gt;               switch (opt) {
&gt;               case 'h':
&gt;                       errarg=-1;
&gt;                       break;
&gt;               case 'v':
&gt;                       switch (atoi(optarg)) {
&gt;                       case 1: verbosity=MPI_T_VERBOSITY_USER_BASIC; break;
&gt;                       case 2: verbosity=MPI_T_VERBOSITY_USER_DETAIL; break;
&gt;                       case 3: verbosity=MPI_T_VERBOSITY_USER_ALL; break;
&gt;                       case 4: verbosity=MPI_T_VERBOSITY_TUNER_BASIC; break;
&gt;                       case 5: verbosity=MPI_T_VERBOSITY_TUNER_DETAIL; break;
&gt;                       case 6: verbosity=MPI_T_VERBOSITY_TUNER_ALL; break;
&gt;                       case 7: verbosity=MPI_T_VERBOSITY_MPIDEV_BASIC; break;
&gt;                       case 8: verbosity=MPI_T_VERBOSITY_MPIDEV_DETAIL; break;
&gt;                       case 9: verbosity=MPI_T_VERBOSITY_MPIDEV_ALL; break;
&gt;                       }
&gt;                       break;
&gt;                       case 'p':
&gt;                               list_pvar=1;
&gt;                               list_cvar=0;
&gt;                               break;
&gt;                       case 'c':
&gt;                               list_cvar=1;
&gt;                               list_pvar=0;
&gt;                               break;
&gt;                       case 'l':
&gt;                               longlist=1;
&gt;                               break;
&gt;                       case 'm':
&gt;                               runmpi=0;
&gt;                               break;
&gt;                       default:
&gt;                               errarg=1;
&gt;                               erropt=opt;
&gt;                               break;
&gt;               }
&gt;       }
&gt;
&gt;       /* Initialize */
&gt;
&gt;       if (runmpi)
&gt;       {
&gt;               err=MPI_Init_thread(&amp;argc,&amp;argv,reqthread,&amp;threadsupport);
&gt;               CHECKERR(&quot;Init&quot;,err);
&gt;
&gt;               err=MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
&gt;               CHECKERR(&quot;Rank&quot;,err);
&gt;       }
&gt;       else
&gt;               rank=0;
&gt;
&gt;
&gt;       /* ONLY FOR RANK 0 */
&gt;
&gt;       if (rank==0)
&gt;       {
&gt;               err=MPI_T_init_thread(reqthread, &amp;threadsupport_t);
&gt;               CHECKERR(&quot;T_Init&quot;,err);
&gt;
&gt;               if (errarg)
&gt;               {
&gt;                       if (errarg&gt;0)
&gt;                               printf(&quot;Argument error: %c\n&quot;,erropt);
&gt;                       usage(errarg!=-1);
&gt;               }
&gt;
&gt;
&gt;               /* Header */
&gt;
&gt;               printf(&quot;MPI_T Variable List\n&quot;);
&gt;
&gt;
&gt;               if (runmpi)
&gt;               {
&gt;                       /* Print thread support for MPI */
&gt;
&gt;                       printf(&quot;  MPI Thread support: &quot;);
&gt;                       switch (threadsupport) {
&gt;                       case MPI_THREAD_SINGLE:
&gt;                               printf(&quot;MPI_THREAD_SINGLE\n&quot;);
&gt;                               break;
&gt;                       case MPI_THREAD_FUNNELED:
&gt;                               printf(&quot;MPI_THREAD_FUNNELED\n&quot;);
&gt;                               break;
&gt;                       case MPI_THREAD_SERIALIZED:
&gt;                               printf(&quot;MPI_THREAD_SERIALIZED\n&quot;);
&gt;                               break;
&gt;                       case MPI_THREAD_MULTIPLE:
&gt;                               printf(&quot;MPI_THREAD_MULTIPLE\n&quot;);
&gt;                               break;
&gt;                       default:
&gt;                               printf(&quot;unknown (%i)\n&quot;,threadsupport);
&gt;                       }
&gt;               }
&gt;
&gt;               /* Print thread support for MPI_T */
&gt;
&gt;               printf(&quot;  MPI_T Thread support: &quot;);
&gt;               switch (threadsupport_t) {
&gt;               case MPI_THREAD_SINGLE:
&gt;                       printf(&quot;MPI_THREAD_SINGLE\n&quot;);
&gt;                       break;
&gt;               case MPI_THREAD_FUNNELED:
&gt;                       printf(&quot;MPI_THREAD_FUNNELED\n&quot;);
&gt;                       break;
&gt;               case MPI_THREAD_SERIALIZED:
&gt;                       printf(&quot;MPI_THREAD_SERIALIZED\n&quot;);
&gt;                       break;
&gt;               case MPI_THREAD_MULTIPLE:
&gt;                       printf(&quot;MPI_THREAD_MULTIPLE\n&quot;);
&gt;                       break;
&gt;               default:
&gt;                       printf(&quot;unknown (%i)\n&quot;,threadsupport_t);
&gt;               }
&gt;
&gt;               /* Start MPI_T */
&gt;
&gt;
&gt;               if (list_cvar)
&gt;               {
&gt;                       printf(&quot;\n===============================\n&quot;);
&gt;                       printf(&quot;Control Variables&quot;);
&gt;                       printf(&quot;\n===============================\n\n&quot;);
&gt;                       list_cvars();
&gt;                       printf(&quot;\n&quot;);
&gt;               }
&gt;
&gt;               if (list_pvar)
&gt;               {
&gt;                       printf(&quot;\n===============================\n&quot;);
&gt;                       printf(&quot;Performance Variables&quot;);
&gt;                       printf(&quot;\n===============================\n\n&quot;);
&gt;                       list_pvars();
&gt;                       printf(&quot;\n&quot;);
&gt;               }
&gt;       }
&gt;
&gt;       /* Clean up */
&gt;
&gt;       if (runmpi)
&gt;       {
&gt;               err=MPI_Barrier(MPI_COMM_WORLD);
&gt;               CHECKERR(&quot;Barrier&quot;,err);
&gt;       }
&gt;
&gt;       if (rank==0)
&gt;               MPI_T_finalize();
&gt;
&gt;       if (runmpi)
&gt;               MPI_Finalize();
&gt;
&gt;       if (rank==0)
&gt;               printf(&quot;Done.\n&quot;);
&gt;
&gt;       return 0;
&gt; }
&gt;




&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24762.php">http://www.open-mpi.org/community/lists/users/2014/07/24762.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24790.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24792.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
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
