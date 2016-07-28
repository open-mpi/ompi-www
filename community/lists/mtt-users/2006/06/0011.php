<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 12:50:35 2006" -->
<!-- isoreceived="20060613165035" -->
<!-- sent="Tue, 13 Jun 2006 12:50:33 -0400" -->
<!-- isosent="20060613165033" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] multiple testing configurations from a single workspace" -->
<!-- id="20060613165033.GA23875_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="448DC396.9030702_at_Sun.COM" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 12:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0012.php">Jeff Squyres \(jsquyres\): "[MTT users] Working on the code"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Ethan Mallove: "[MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Ethan Mallove: "[MTT users] multiple testing configurations from a single workspace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Reply:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 12, 2006 at 03:42:14PM -0400, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to test multiple test configurations from a single 
</span><br>
<span class="quotelev1">&gt; workspace simultaneously in MTT? For example, I want to run a set of 
</span><br>
<span class="quotelev1">&gt; tests on i386 and sparc at the same time from a single testing 
</span><br>
<span class="quotelev1">&gt; workspace. Looking at the sample.ini file, it seems like this could be 
</span><br>
<span class="quotelev1">&gt; done using multiple .ini files and setting each &quot;copydir&quot; in each to run 
</span><br>
<span class="quotelev1">&gt; in a different workspace to avoid conflicts amongst multiple instances 
</span><br>
<span class="quotelev1">&gt; of MTT.
</span><br>
<p>Jeff - correct me if I'm wrong here.
<br>
<p>I would just use the --scratch parameter to MTT itself and have two
<br>
separate scratch spaces for i386 and sparc, though it sounds like you
<br>
don't want that.
<br>
<p>Using copydir should work as long as you are careful to keep i386 and
<br>
sparc binaries from being mixed up.  Jeff can answer better, but you
<br>
will also need to be careful about having two MTT runs working in the
<br>
same scratch space, as I don't think we do anything to handle this.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; It turns out that this is a limitation of TET (I think). Right now, in 
</span><br>
<span class="quotelev1">&gt; order to do the above I have to create a separate testing area for each 
</span><br>
<span class="quotelev1">&gt; testing configuration (e.g., sparc, i386, solaris 10, solaris 11, ...) 
</span><br>
<span class="quotelev1">&gt; to avoid multiple TET's from interfering with each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0012.php">Jeff Squyres \(jsquyres\): "[MTT users] Working on the code"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Ethan Mallove: "[MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Ethan Mallove: "[MTT users] multiple testing configurations from a single workspace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Reply:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
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
