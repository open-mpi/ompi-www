<?
$subject_val = "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 09:50:34 2016" -->
<!-- isoreceived="20160713135034" -->
<!-- sent="Wed, 13 Jul 2016 07:50:30 -0600" -->
<!-- isosent="20160713135030" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory" -->
<!-- id="4499A2ED-17FE-46E7-8016-CA96CF8917C7_at_me.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S_-xPPZUGfUUzWiWpkGYyTAqShcompk=UP3kx+=zqSbgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 09:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29656.php">Matt Thompson: "[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="29656.php">Matt Thompson: "[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As of 2.0.0 we now support experimental verbs. It looks like one of the calls is failing:
<br>
<p>#if HAVE_DECL_IBV_EXP_QUERY_DEVICE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;device-&gt;ib_exp_dev_attr.comp_mask = IBV_EXP_DEVICE_ATTR_RESERVED - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(ibv_exp_query_device(device-&gt;ib_dev_context, &amp;device-&gt;ib_exp_dev_attr)){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;error obtaining device attributes for %s errno says %s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(device-&gt;ib_dev), strerror(errno)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<p>Do you know what OFED or MOFED version you are running?
<br>
<p>-Nathan
<br>
<p><span class="quotelev1">&gt; On Jul 13, 2016, at 7:15 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been struggling here at NASA Goddard trying to get PGI 16.5 + Open MPI 1.10.3 working on the Discover cluster. What was happening was I'd run our climate model at, say, 4x24 and it would work sometimes. Most of the time. Every once in a while, it'd throw a segfault. If we changed the layout or number of processors, more (and sometimes different) segfaults are trigger.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As we could build with PGI 15.7 + Open MPI 1.10.3 (where Open MPI is built exactly the same) and run perfectly, I was focusing on the Open MPI build. I tried compiling it at -O3, -O, -O0, all sorts of things and was about to throw in the towel as all failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I saw Open MPI 2.0.0 was out and figured, may as well try the latest before reporting to the mailing list. I built it and, huzzah!, it works! I'm happy! Except that every time I execute 'mpirun' I get odd errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1034) $ mpirun -np 4 ./helloWorld.mpi2.exe 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:   borgr074
</span><br>
<span class="quotelev1">&gt;   Local device: mlx5_0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [borgr074][[35244,1],1][btl_openib_component.c:1618:init_one_device] error obtaining device attributes for mlx5_0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [borgr074][[35244,1],3][btl_openib_component.c:1618:init_one_device] error obtaining device attributes for mlx5_0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [borgr074][[35244,1],0][btl_openib_component.c:1618:init_one_device] error obtaining device attributes for mlx5_0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [borgr074][[35244,1],2][btl_openib_component.c:1618:init_one_device] error obtaining device attributes for mlx5_0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; MPI Version: 3.1
</span><br>
<span class="quotelev1">&gt; MPI Library Version: Open MPI v2.0.0, package: Open MPI mathomp4_at_borg01z239 Distribution, ident: 2.0.0, repo rev: v2.x-dev-1570-g0a4a5d7, Jul 12, 2016
</span><br>
<span class="quotelev1">&gt; Process    0 of    4 is on borgr074
</span><br>
<span class="quotelev1">&gt; Process    3 of    4 is on borgr074
</span><br>
<span class="quotelev1">&gt; Process    1 of    4 is on borgr074
</span><br>
<span class="quotelev1">&gt; Process    2 of    4 is on borgr074
</span><br>
<span class="quotelev1">&gt; [borgr074:29032] 3 more processes have sent help message help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev1">&gt; [borgr074:29032] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run with --mca btl_base_verbose 1 and use more than one node, I see that the openib/verbs (still not sure what to call this) btl isn't being used, but rather tcp:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [borgr075:14374] mca: bml: Using tcp btl for send to [[35628,1],15] on node borgr074
</span><br>
<span class="quotelev1">&gt; [borgr075:14374] mca: bml: Using tcp btl for send to [[35628,1],15] on node borgr074
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which makes sense since it can't find an Infiniband device.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My first thought is that the build/configure procedure of the past doesn't quite jibe with what Open MPI 2.0.0 is expecting? I build Open MPI as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=pgcc
</span><br>
<span class="quotelev1">&gt; export CXX=pgc++
</span><br>
<span class="quotelev1">&gt; export FC=pgfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-fpic -m64&quot;
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=&quot;-fpic -m64&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;-m64 -fpic&quot;
</span><br>
<span class="quotelev1">&gt; export PREFIX=/discover/swdev/mathomp4/MPI/openmpi/2.0.0/pgi-16.5-k40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/usr/slurm/lib64
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=&quot;-L/usr/slurm/lib64&quot;
</span><br>
<span class="quotelev1">&gt; export CPPFLAGS=&quot;-I/usr/slurm/include&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LIBS=&quot;-lpciaccess&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; build() {
</span><br>
<span class="quotelev1">&gt;   echo `pwd`
</span><br>
<span class="quotelev1">&gt;   ./configure --with-slurm --disable-wrapper-rpath --enable-shared --prefix=${PREFIX}
</span><br>
<span class="quotelev1">&gt;   make -j8
</span><br>
<span class="quotelev1">&gt;   make install
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo &quot;calling build&quot;
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; echo &quot;exiting&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a build script built over time; it might have things unnecessary for an Open MPI 2.0 build, but perhaps now it needs more info? I can say that in the past (say with 1.10.3) it definitely found the openib/verbs btl and used it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per the website, I'm attaching links to my config.log and &quot;ompi_info --all&quot; information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://dl.dropboxusercontent.com/u/61696/Open%20MPI/config.log.gz">https://dl.dropboxusercontent.com/u/61696/Open%20MPI/config.log.gz</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://dl.dropboxusercontent.com/u/61696/Open%20MPI/build.pgi16.5.log.gz">https://dl.dropboxusercontent.com/u/61696/Open%20MPI/build.pgi16.5.log.gz</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://dl.dropboxusercontent.com/u/61696/Open%20MPI/ompi_info.txt.gz">https://dl.dropboxusercontent.com/u/61696/Open%20MPI/ompi_info.txt.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to run &quot;ompi_info -v ompi full --parsable&quot; as asked but that doesn't seem possible anymore:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1053) $ ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; ompi_info: Error: unknown option &quot;-v&quot;
</span><br>
<span class="quotelev1">&gt; Type 'ompi_info --help' for usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am asking our machine gurus about the Infiniband network per: <a href="https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29656.php">http://www.open-mpi.org/community/lists/users/2016/07/29656.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29656.php">Matt Thompson: "[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="29656.php">Matt Thompson: "[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="29658.php">Matt Thompson: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
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
