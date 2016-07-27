<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 16:59:40 2007" -->
<!-- isoreceived="20071016205940" -->
<!-- sent="Tue, 16 Oct 2007 16:59:29 -0400" -->
<!-- isosent="20071016205929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Handling &amp;quot;Interrupted system call&amp;quot; with MTT" -->
<!-- id="B8DF3429-5821-42FA-B047-8CE503A2E2CE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071016152331.GB9693_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-16 16:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0165.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0163.php">Ethan Mallove: "[MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0163.php">Ethan Mallove: "[MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0165.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0165.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick!
<br>
<p>This is a long-known problem [apparently] with Sun's NFS,  
<br>
unfortunately.  :-(
<br>
<p>I'd be ok with this if there is an eventual bail out of the loop --  
<br>
the prospect of an infinite loop is a bit scary for me.
<br>
<p><p>On Oct 16, 2007, at 11:23 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On certain NFS servers, I run into the error message
</span><br>
<span class="quotelev1">&gt; &quot;Interrupted system call&quot; when executing long running
</span><br>
<span class="quotelev1">&gt; commands such as &quot;make all&quot;. One solution I've been able to
</span><br>
<span class="quotelev1">&gt; use is to setup an NFS mount point solely for the cluster
</span><br>
<span class="quotelev1">&gt; I'm using, but this is not always an option. The below link
</span><br>
<span class="quotelev1">&gt; advises to restart the build on &quot;Interrupted system call&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://developers.sun.com/solaris/articles/parallel_make.html">http://developers.sun.com/solaris/articles/parallel_make.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wrapped the GNU_Install.pm make commands in a do-while to
</span><br>
<span class="quotelev1">&gt; effect the build restarts. E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   do {
</span><br>
<span class="quotelev1">&gt;       $x = MTT::DoCommand::Cmd(&quot;make install&quot;)
</span><br>
<span class="quotelev1">&gt;   } while (!MTT::DoCommand::wsuccess($x-&gt;{exit_status}) and ($x-&gt; 
</span><br>
<span class="quotelev1">&gt; {result_stderr} =~ /interrupted system call/i));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As long as make emits &quot;interrupted system call&quot; and fails,
</span><br>
<span class="quotelev1">&gt; MTT will keep restarting make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize this is ugly, but is it acceptable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0165.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0163.php">Ethan Mallove: "[MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0163.php">Ethan Mallove: "[MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0165.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0165.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
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
