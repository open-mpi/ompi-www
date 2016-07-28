<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 01:32:11 2006" -->
<!-- isoreceived="20061016053211" -->
<!-- sent="Sun, 15 Oct 2006 23:31:46 -0600" -->
<!-- isosent="20061016053146" -->
<!-- name="Josh England" -->
<!-- email="jjengla_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building static w/ 1.1.2_rc4" -->
<!-- id="1160976706.9948.25.camel_at_localhost" -->
<!-- inreplyto="DFD3D0A1-EDF1-4C49-A6C1-754F23A09E11_at_cisco.com" -->
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
<strong>From:</strong> Josh England (<em>jjengla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 01:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 2006-10-14 at 09:35 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Given the messages from the linker and my prior mail, I'm not sure  
</span><br>
<span class="quotelev1">&gt; that a) is possible -- it will require more poking around to know for  
</span><br>
<span class="quotelev1">&gt; sure.  b) is definitely possible simply by using --enable-static and  
</span><br>
<span class="quotelev1">&gt; and then using &quot;mpicc&quot; (and friends) as normal.   
</span><br>
<span class="quotelev1">&gt; OMPI will be built statically (to include torque and libibverbs,  
</span><br>
<span class="quotelev1">&gt; assuming you have .a's versions of both of those), but as Scott  
</span><br>
<span class="quotelev1">&gt; mentioned, system libraries such as dl and sysfs will be linked  
</span><br>
<span class="quotelev1">&gt; dynamically.
</span><br>
<p>OK.  I've got a build with --enable-static and --disable-shared, and I'm
<br>
still seeing the *exact* same behavior.  I cannot build a static library
<br>
either with mpicc or specifying a manual link line.  Note that this
<br>
appears to be a problem only with 1.1.2_rc4.  Open MPI version 1.1.1
<br>
seems to work.
<br>
<p>-JE
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1983.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Reply:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
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
