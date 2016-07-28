<?
$subject_val = "Re: [OMPI users] does openmpi have C++ bindings?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 12:14:14 2008" -->
<!-- isoreceived="20081006161414" -->
<!-- sent="Mon, 6 Oct 2008 12:14:04 -0400" -->
<!-- isosent="20081006161404" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] does openmpi have C++ bindings?" -->
<!-- id="CD254EC6-1604-4DC3-9272-1BF0FA7D324F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="788430.62101.qm_at_web34807.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] does openmpi have C++ bindings?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 12:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6837.php">Shafagh Jafer: "[OMPI users] does openmpi have C++ bindings?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6838.php">Gabriele Fatigati: "Re: [OMPI users] mpi2c++ map?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, OMPI's C++ bindings are built by default if you have a valid C++  
<br>
compiler.  ompi_info should indicate whether you have the C++ bindings  
<br>
built or not.
<br>
<p>But the C++ bindings don't allow sending/receiving STL containers via  
<br>
MPI calls.  For that, as someone else suggested, have a look at  
<br>
Boost.MPI.  The boost group built a nice C++ class library on top of  
<br>
MPI.
<br>
<p><p>On Oct 2, 2008, at 5:25 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; Does openmpi have C++ bindings? or I need to install this package?if  
</span><br>
<span class="quotelev1">&gt; yes from where and how?
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6866.php">Ray Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6864.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6837.php">Shafagh Jafer: "[OMPI users] does openmpi have C++ bindings?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6838.php">Gabriele Fatigati: "Re: [OMPI users] mpi2c++ map?"</a>
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
