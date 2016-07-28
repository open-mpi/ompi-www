<?
$subject_val = "Re: [hwloc-users] quick question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 09:39:45 2010" -->
<!-- isoreceived="20100722133945" -->
<!-- sent="Thu, 22 Jul 2010 15:39:37 +0200" -->
<!-- isosent="20100722133937" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] quick question" -->
<!-- id="20100722133937.GJ5982_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTimAoO1XR4B1Omx_tRtUK5Dw0MJ7ubuLliD0-A0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] quick question<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 09:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/08/0224.php">Jirka Hladky: "[hwloc-users] hwloc is now available as package for Fedora"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-users] quick question"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Rupert Brooks: "[hwloc-users] quick question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Rupert Brooks, le Thu 22 Jul 2010 09:20:34 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; So i apologize if this question has been asked many times before.  Is
</span><br>
<span class="quotelev1">&gt; there a way using hwloc (or otherwise) that i can identify which core
</span><br>
<span class="quotelev1">&gt; of the machine a thread is currently using?
</span><br>
<p>Hwloc provides a function to get the current affinity mask.  This
<br>
doesn't however give which processor the thread is really currently
<br>
running on.
<br>
<p>One issue with such function is that the returned value is potentially
<br>
outdated very quickly, when the OS is allowed to move threads. That's
<br>
probably why I haven't seen it provided by OSes. In the case of Linux,
<br>
you can check e.g. top's P column (Last used cpu), or you can also check
<br>
the 39th field of /proc/&lt;pid&gt;/stat which provides the same information.
<br>
<p>In practice, I usually trust the OS in respecting the affinity mask, and
<br>
just use lstopo --top to get the affinity mask that the OS is supposed
<br>
to respect.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/08/0224.php">Jirka Hladky: "[hwloc-users] hwloc is now available as package for Fedora"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Jeff Squyres: "Re: [hwloc-users] quick question"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Rupert Brooks: "[hwloc-users] quick question"</a>
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
