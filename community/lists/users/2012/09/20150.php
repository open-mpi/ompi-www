<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 05:58:35 2012" -->
<!-- isoreceived="20120907095835" -->
<!-- sent="Fri, 7 Sep 2012 05:58:30 -0400" -->
<!-- isosent="20120907095830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="35DCAFC1-7244-447B-B066-2FCA220D7D7C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPUxaiTf5hgS1U-F=n79oPArhPY5fnfdEdmq=9ou9bU5cYRy4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 05:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20149.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 3:59 AM, Andrea Negri wrote:
<br>
<p><span class="quotelev1">&gt; I have tried with these flags (I use gcc 4.7 and open mpi 1.6), but
</span><br>
<span class="quotelev1">&gt; the program doesn't crash, a node go down and the rest of them remain
</span><br>
<span class="quotelev1">&gt; to wait a signal (there is an ALLREDUCE in the code).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, yesterday some processes died (without a log) on the node 10,
</span><br>
<p>I suggest that you should probably start adding your own monitoring.  *Something* is happening, but apparently it's not being captured in any logs that you see.  For example:
<br>
<p>- run your program through valgrind, or other memory-checking debugger
<br>
- ask you admin to increase the syslog levels to get more information
<br>
- ensure that sys logging is going to both the local disk and to a remote server (in case your machines are getting re-imaged and local disk syslogs get wiped out upon reboot)
<br>
- look at dmesg output immediately upon reboot
<br>
- look at /var/log/syslog output immediately upon reboot
<br>
- when your job launches continually capture some linux statistics (e.g., every N seconds -- pick N to meet your needs), such as:
<br>
&nbsp;&nbsp;- top -b -n 9999999 -d N (use the same N value as above)
<br>
&nbsp;&nbsp;- numastat -H
<br>
&nbsp;&nbsp;- cat /proc/meminfo
<br>
&nbsp;&nbsp;- ...etc.
<br>
<p>When a crash occurs, look an these logs you've made and see if you can find any trends, like running out of memory on any particular NUMA node (or overall), if any process size is growing arbitrarily large, etc.
<br>
<p>Also look for hardware errors.  Perhaps you have some bad RAM somewhere.  Is it always the same node that crashes?  And so on.
<br>
<p><span class="quotelev1">&gt; I logged almost immediately in the node and I found the process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/sbin/hal_lpadmin -x /org/freedesktop/Hal/devices/pci_10de_267
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is it? I know that hal is a device demon, but hal_lpadmin?
</span><br>
<p>It has to do with managing printers.
<br>
<p><span class="quotelev1">&gt; PS: What is the correct method to reply in this mailing list? I use
</span><br>
<span class="quotelev1">&gt; gmail and I usually I hit the reply butt, replace the object, but here
</span><br>
<span class="quotelev1">&gt; it seems the I opening a new thread each time I post.
</span><br>
<p><p>You seem to be replying to the daily digest mail rather than the individual mails in this thread.  That's why it creates a new thread in the web mail archives.  If you replied to the individual mails, they would thread properly on the web mail archives.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20149.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
