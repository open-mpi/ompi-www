<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  6 10:49:00 2008" -->
<!-- isoreceived="20081206154900" -->
<!-- sent="Sat, 6 Dec 2008 10:48:54 -0500" -->
<!-- isosent="20081206154854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="0E76241D-C5E2-4091-B6D4-FFB3C88253C0_at_cisco.com" -->
<!-- charset="KOI8-R" -->
<!-- inreplyto="6750442a0812060732m2cac2e9er5019b6837219645b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective algorithms<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-06 10:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7438.php">Douglas Guptill: "[OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7436.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7436.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7487.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7487.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2008, at 10:32 AM, &#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215; wrote:
<br>
<p><span class="quotelev1">&gt; Hello. Thanks for your response. I'm  create a my module and  
</span><br>
<span class="quotelev1">&gt; component into the coll. But when I execute autogen.sh, it's  
</span><br>
<span class="quotelev1">&gt; return ../../libtool: line 847: X--tag=CC: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 880: libtool: ignoring unknown tag : command not  
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 847: X--mode=compile: command not found
</span><br>
<span class="quotelev1">&gt;  I have a libtool v 1.5.26. Can you get me a some guide about create  
</span><br>
<span class="quotelev1">&gt; configure.m4.
</span><br>
<p>You might want to upgrade your Libtool; Libtool 2.x has been stable  
<br>
for quite some time now.  See the HACKING file in the top-level Open  
<br>
MPI directory for how to upgrade your GNU Auto/Libtools.
<br>
<p>If upgrading your Auto tools doesn't work, let's move this  
<br>
conversation to the devel list and send all relevant information  
<br>
(e.g., your configure.m4, autogen.sh output, etc.), and we'll diagnose  
<br>
from there.
<br>
<p>Good example configure.m4 files can be found throughout the OMPI code  
<br>
base; do a &quot;find . -name configure.m4&quot; from the top-level dir and  
<br>
you'll see all of them.  A relatively simple one to template from is  
<br>
ompi/mca/btl/tcp/configure.m4 (it only has one test in it, but you can  
<br>
see that you're required to define an M4 macro named  
<br>
MCA_coll_&lt;your_component_name&gt;_CONFIG).  Just make sure to s/btl_tcp/ 
<br>
coll_&lt;your component name&gt;/ in your configure.m4.  Keep in mind that  
<br>
per my first mail, you may not need a configure.m4 -- you only need  
<br>
configure.m4 if you need configure to figure out if your component can  
<br>
build (e.g., if you need some specific libraries or header files that  
<br>
aren't generally universally installed on POSIX-like operating  
<br>
systems, such as support for specific network libraries/hardware like  
<br>
MX, OpenFabrics, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7438.php">Douglas Guptill: "[OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7436.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7436.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7487.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7487.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
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
