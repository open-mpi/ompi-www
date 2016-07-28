<?
$subject_val = "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 23 17:49:46 2013" -->
<!-- isoreceived="20130923214946" -->
<!-- sent="Mon, 23 Sep 2013 21:49:44 +0000" -->
<!-- isosent="20130923214944" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation aborted for Handler.cpp (code 2)" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8C328F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMvdAsJPPs3Y6Cn4XoAm5p7yY43xiyk2MOgFVaBcVK8NTuaobQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-23 17:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22717.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "[OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Previous message:</strong> <a href="22715.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
<li><strong>In reply to:</strong> <a href="22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect that something is wrong with your Intel C++ compiler installation, but you can simply avoid the issue if you add --disable-vt to Open MPI's ./configure command line.  This will skip building the (optional) Vampir Trace package, which is where you are running into this problem (VT is written in C++; the vast majority of the rest of Open MPI is written in C).
<br>
<p><p>On Sep 22, 2013, at 10:40 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Its ok Jeff.
</span><br>
<span class="quotelev1">&gt; I am not sure about other C++ codes and STL with icpc because it never
</span><br>
<span class="quotelev1">&gt; happened and I don't know anything about STL.(pardon my less
</span><br>
<span class="quotelev1">&gt; knowledge). What do you suggest in this case? installation of
</span><br>
<span class="quotelev1">&gt; different version of openmpi or intel compilers? or any other
</span><br>
<span class="quotelev1">&gt; solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 20, 2013 at 8:35 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay replying -- I actually replied on the original thread yesterday, but it got hung up in my outbox and I didn't notice that it didn't actually go out until a few moments ago.  :-(
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
<span class="quotelev3">&gt;&gt;&gt; Output of make V=1 is attached. Again same error. If intel compiler is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using C++ headers from gfortran then how can we avoid this.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Sep 20, 2013 at 4:49 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to compile openmpi-1.6.5 on fc16.x86_64 with icc and ifort
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but getting the subject error. config.out and make.out is attached.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could you also run make with 'make V=1' and send the output. Anyway it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looks like the intel compiler uses the C++ headers from GCC 4.6.3 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know if this is supported.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please help/advise.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you and best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;makeV.zip&gt;_______________________________________________
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22717.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "[OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Previous message:</strong> <a href="22715.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
<li><strong>In reply to:</strong> <a href="22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
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
