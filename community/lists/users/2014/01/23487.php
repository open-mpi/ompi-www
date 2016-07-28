<?
$subject_val = "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 11:37:59 2014" -->
<!-- isoreceived="20140128163759" -->
<!-- sent="Tue, 28 Jan 2014 11:37:55 -0500" -->
<!-- isosent="20140128163755" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation aborted for Handler.cpp (code 2)" -->
<!-- id="52E7DCE3.4090304_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="06a901cf1c3f$e7a87cd0$b6f97670$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation aborted for Handler.cpp (code 2)<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 11:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23488.php">Dave Love: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Previous message:</strong> <a href="23486.php">Abdul Rahman Riza: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="23486.php">Abdul Rahman Riza: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/28/2014 10:44 AM, Abdul Rahman Riza wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Syed Ahsan Ali
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, September 22, 2013 9:41 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] compilation aborted for Handler.cpp (code 2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its ok Jeff.
</span><br>
<span class="quotelev1">&gt; I am not sure about other C++ codes and STL with icpc because it never
</span><br>
<span class="quotelev1">&gt; happened and I don't know anything about STL.(pardon my less knowledge).
</span><br>
<span class="quotelev1">&gt; What do you suggest in this case? installation of different version of
</span><br>
<span class="quotelev1">&gt; openmpi or intel compilers? or any other solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 20, 2013 at 8:35 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay replying -- I actually replied on the original
</span><br>
<span class="quotelev2">&gt;&gt; thread yesterday, but it got hung up in my outbox and I didn't notice
</span><br>
<span class="quotelev2">&gt;&gt; that it didn't actually go out until a few moments ago.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm *guessing* that this is a problem with your local icpc installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you compile / run other C++ codes that use the STL with icpc?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 20, 2013, at 6:59 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Output of make V=1 is attached. Again same error. If intel compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is using C++ headers from gfortran then how can we avoid this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Sep 20, 2013 at 11:07 AM, Bert Wesarg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Sep 20, 2013 at 4:49 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to compile openmpi-1.6.5 on fc16.x86_64 with icc and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ifort but getting the subject error. config.out and make.out is
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Following command was used for configure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure CC=icc CXX=icpc FC=ifort F77=ifort F90=ifort
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --prefix=/home/openmpi_gfortran -enable-mpi-f90 --enable-mpi-f77 |&amp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tee config.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could you also run make with 'make V=1' and send the output. Anyway
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it looks like the intel compiler uses the C++ headers from GCC 4.6.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I don't know if this is supported.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
icpc expects to pick up headers and libraries, including libstdc++, from 
<br>
a simultaneously active g++ installation (normally the g++ which is on 
<br>
PATH and LD_LIBRARY_PATH).   g++ 4.7 or 4.8 (with not all the latest 
<br>
features supported by icpc) are probably better with the recent icpc 
<br>
13.1 and 14.0, but I hope the OpenMP build doesn't depend on c++11. If 
<br>
you do use c++11, you need versions of icpc and g++ both supporting it 
<br>
via -std=c++11 (where g++ 4.6 may need c++0x).
<br>
&nbsp;&nbsp;You could run into cluster configuration issues if you don't have 
<br>
consistent g++ as well as icpc run-times on LD_LIBRARY_PATH everywhere.
<br>
You can't mix support for gfortran with support for ifort; for C and C++ 
<br>
you should be able to use gcc/g++ and icc/icpc interchangeably, so you 
<br>
could configure for gcc and g++ along with ifort and still use icc and 
<br>
icpc as you choose.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23488.php">Dave Love: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Previous message:</strong> <a href="23486.php">Abdul Rahman Riza: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="23486.php">Abdul Rahman Riza: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
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
