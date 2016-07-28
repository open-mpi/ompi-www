<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 15:18:08 2006" -->
<!-- isoreceived="20061120201808" -->
<!-- sent="Mon, 20 Nov 2006 15:17:56 -0500" -->
<!-- isosent="20061120201756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Updates to ini files" -->
<!-- id="5F0F34A0-5A5F-4649-A5CD-00E4E21E36D2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 15:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0229.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All --
<br>
<p>I added some new functlets on the MTT code base (please do an &quot;svn  
<br>
up&quot;) that will allow for more correct termination of MPI tests.  More  
<br>
specifically, our previous &quot;pass&quot; criteria in ini files was only  
<br>
checking the exit status of the process (e.g., the value given to exit 
<br>
() from the C code) -- it was not checking whether the process  
<br>
actually exited or terminated due to signal.  I advise all MTT users  
<br>
to do the following:
<br>
<p>1. Run &quot;svn up&quot; to get all the latest changes
<br>
2. Change the &quot;pass&quot; criteria in your INI files to use the new  
<br>
funclets.  By example, here's an old one:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pass = &amp;eq(&amp;test_exit_status(), 0)
<br>
<p>and here's what I suggest for a new one:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
<br>
<p>This will make sure that both a) a test exited normally (i.e., not  
<br>
via signal), and b) that its exit status was 0.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0229.php">Tim Mattox: "Re: [MTT users] nightly OMPI tarballs"</a>
<li><strong>Previous message:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
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
