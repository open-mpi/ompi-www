<?
$subject_val = "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 11:29:03 2013" -->
<!-- isoreceived="20130920152903" -->
<!-- sent="Fri, 20 Sep 2013 15:28:48 +0000" -->
<!-- isosent="20130920152848" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation aborted for Handler.cpp (code 2)" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8BC7EC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAsKHxs+AhVK7fN05vY2RQDbouUmGsypM3bL_PorJV1ezuQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-09-20 11:28:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22672.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't tell if this is a busted compiler installation or not.  The first error is:
<br>
<p>-----
<br>
/usr/include/c++/4.6.3/bits/stl_algobase.h(573): error: type name is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const bool __simple = (__is_trivial(_ValueType1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected during:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instantiation of &quot;_BI2 std::__copy_move_backward_a2&lt;_IsMove,_BI1,_BI2&gt;(_BI1, _BI1, _BI2) [with _IsMove=false, _BI1=uint32_t={unsigned int} *, _BI2=uint32_t={unsigned int} *]&quot; at line 625
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instantiation of &quot;_BI2 std::copy_backward(_BI1, _BI1, _BI2) [with _BI1=uint32_t={unsigned int} *, _BI2=uint32_t={unsigned int} *]&quot; at line 315 of &quot;/usr/include/c++/4.6.3/bits/vector.tcc&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instantiation of &quot;void std::vector&lt;_Tp, _Alloc&gt;::_M_insert_aux(__gnu_cxx::__normal_iterator&lt;std::_Vector_base&lt;_Tp, _Alloc&gt;::_Tp_alloc_type::pointer, std::vector&lt;_Tp, _Alloc&gt;&gt;, const _Tp &amp;) [with _Tp=uint32_t={unsigned int}, _Alloc=std::allocator&lt;uint32_t={unsigned int}&gt;]&quot; at line 834 of &quot;/usr/include/c++/4.6.3/bits/stl_vector.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instantiation of &quot;void std::vector&lt;_Tp, _Alloc&gt;::push_back(const _Tp &amp;) [with _Tp=uint32_t={unsigned int}, _Alloc=std::allocator&lt;uint32_t={unsigned int}&gt;]&quot; at line 42 of &quot;Handler.cpp&quot;
<br>
-----
<br>
<p>I verified that OMPI 1.6.5 builds fine for me for icpc/13.1.0.146 Build 20130121 on RHEL 6.
<br>
<p>Perhaps you have some kind of bad interaction between your icpc installation and your local g++ installation...?
<br>
<p><p><p>On Sep 18, 2013, at 12:58 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Please find attached again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 17, 2013 at 11:35 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2013, at 9:00 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to compile openmpi-1.6.5 on fc16.x86_64 with icc and ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but getting the subject error. config.out and make.out is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Following command was used for configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CC=icc CXX=icpc FC=ifort F77=ifort F90=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/home/openmpi_gfortran -enable-mpi-f90 --enable-mpi-f77 |&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tee config.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry; I can't open a .rar file.  Can you send the logs compressed with a conventional compression program like gzip, bzip2, or zip?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
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
<span class="quotelev1">&gt; &lt;logs.zip&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22694.php">Ralph Castain: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22672.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
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
