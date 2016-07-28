<?
$subject_val = "[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 09:16:23 2016" -->
<!-- isoreceived="20160713131623" -->
<!-- sent="Wed, 13 Jul 2016 09:15:52 -0400" -->
<!-- isosent="20160713131552" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory" -->
<!-- id="CAFb48S_-xPPZUGfUUzWiWpkGYyTAqShcompk=UP3kx+=zqSbgQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 09:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Maybe reply:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I've been struggling here at NASA Goddard trying to get PGI 16.5 + Open MPI
<br>
1.10.3 working on the Discover cluster. What was happening was I'd run our
<br>
climate model at, say, 4x24 and it would work sometimes. Most of the time.
<br>
Every once in a while, it'd throw a segfault. If we changed the layout or
<br>
number of processors, more (and sometimes different) segfaults are trigger.
<br>
<p>As we could build with PGI 15.7 + Open MPI 1.10.3 (where Open MPI is built
<br>
exactly the same) and run perfectly, I was focusing on the Open MPI build.
<br>
I tried compiling it at -O3, -O, -O0, all sorts of things and was about to
<br>
throw in the towel as all failed.
<br>
<p>But, I saw Open MPI 2.0.0 was out and figured, may as well try the latest
<br>
before reporting to the mailing list. I built it and, huzzah!, it works!
<br>
I'm happy! Except that every time I execute 'mpirun' I get odd errors:
<br>
<p>(1034) $ mpirun -np 4 ./helloWorld.mpi2.exe
<br>
--------------------------------------------------------------------------
<br>
WARNING: There was an error initializing an OpenFabrics device.
<br>
<p>&nbsp;&nbsp;Local host:   borgr074
<br>
&nbsp;&nbsp;Local device: mlx5_0
<br>
--------------------------------------------------------------------------
<br>
[borgr074][[35244,1],1][btl_openib_component.c:1618:init_one_device] error
<br>
obtaining device attributes for mlx5_0 errno says Cannot allocate memory
<br>
[borgr074][[35244,1],3][btl_openib_component.c:1618:init_one_device] error
<br>
obtaining device attributes for mlx5_0 errno says Cannot allocate memory
<br>
[borgr074][[35244,1],0][btl_openib_component.c:1618:init_one_device] error
<br>
obtaining device attributes for mlx5_0 errno says Cannot allocate memory
<br>
[borgr074][[35244,1],2][btl_openib_component.c:1618:init_one_device] error
<br>
obtaining device attributes for mlx5_0 errno says Cannot allocate memory
<br>
MPI Version: 3.1
<br>
MPI Library Version: Open MPI v2.0.0, package: Open MPI mathomp4_at_borg01z239
<br>
Distribution, ident: 2.0.0, repo rev: v2.x-dev-1570-g0a4a5d7, Jul 12, 2016
<br>
Process    0 of    4 is on borgr074
<br>
Process    3 of    4 is on borgr074
<br>
Process    1 of    4 is on borgr074
<br>
Process    2 of    4 is on borgr074
<br>
[borgr074:29032] 3 more processes have sent help message
<br>
help-mpi-btl-openib.txt / error in device init
<br>
[borgr074:29032] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>If I run with --mca btl_base_verbose 1 and use more than one node, I see
<br>
that the openib/verbs (still not sure what to call this) btl isn't being
<br>
used, but rather tcp:
<br>
<p>[borgr075:14374] mca: bml: Using tcp btl for send to [[35628,1],15] on node
<br>
borgr074
<br>
[borgr075:14374] mca: bml: Using tcp btl for send to [[35628,1],15] on node
<br>
borgr074
<br>
<p>which makes sense since it can't find an Infiniband device.
<br>
<p>My first thought is that the build/configure procedure of the past doesn't
<br>
quite jibe with what Open MPI 2.0.0 is expecting? I build Open MPI as:
<br>
<p>export CC=pgcc
<br>
export CXX=pgc++
<br>
export FC=pgfortran
<br>
<p>export CFLAGS=&quot;-fpic -m64&quot;
<br>
export CXXFLAGS=&quot;-fpic -m64&quot;
<br>
export FCFLAGS=&quot;-m64 -fpic&quot;
<br>
export PREFIX=/discover/swdev/mathomp4/MPI/openmpi/2.0.0/pgi-16.5-k40
<br>
<p>export LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/usr/slurm/lib64
<br>
export LDFLAGS=&quot;-L/usr/slurm/lib64&quot;
<br>
export CPPFLAGS=&quot;-I/usr/slurm/include&quot;
<br>
<p>export LIBS=&quot;-lpciaccess&quot;
<br>
<p>build() {
<br>
&nbsp;&nbsp;echo `pwd`
<br>
&nbsp;&nbsp;./configure --with-slurm --disable-wrapper-rpath --enable-shared
<br>
--prefix=${PREFIX}
<br>
&nbsp;&nbsp;make -j8
<br>
&nbsp;&nbsp;make install
<br>
}
<br>
<p>echo &quot;calling build&quot;
<br>
build
<br>
echo &quot;exiting&quot;
<br>
<p>This is a build script built over time; it might have things unnecessary
<br>
for an Open MPI 2.0 build, but perhaps now it needs more info? I can say
<br>
that in the past (say with 1.10.3) it definitely found the openib/verbs btl
<br>
and used it!
<br>
<p>Per the website, I'm attaching links to my config.log and &quot;ompi_info --all&quot;
<br>
information:
<br>
<p><a href="https://dl.dropboxusercontent.com/u/61696/Open%20MPI/config.log.gz">https://dl.dropboxusercontent.com/u/61696/Open%20MPI/config.log.gz</a>
<br>
<a href="https://dl.dropboxusercontent.com/u/61696/Open%20MPI/build.pgi16.5.log.gz">https://dl.dropboxusercontent.com/u/61696/Open%20MPI/build.pgi16.5.log.gz</a>
<br>
<a href="https://dl.dropboxusercontent.com/u/61696/Open%20MPI/ompi_info.txt.gz">https://dl.dropboxusercontent.com/u/61696/Open%20MPI/ompi_info.txt.gz</a>
<br>
<p>I tried to run &quot;ompi_info -v ompi full --parsable&quot; as asked but that
<br>
doesn't seem possible anymore:
<br>
<p>(1053) $ ompi_info -v ompi full --parsable
<br>
ompi_info: Error: unknown option &quot;-v&quot;
<br>
Type 'ompi_info --help' for usage.
<br>
<p>I am asking our machine gurus about the Infiniband network per:
<br>
<a href="https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>
<br>
<pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="29657.php">Nathan Hjelm: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
<li><strong>Maybe reply:</strong> <a href="29659.php">Aaron Knister: "Re: [OMPI users] Error with Open MPI 2.0.0: error obtaining device attributes for mlx5_0 errno says Cannot allocate memory"</a>
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
