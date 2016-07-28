<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 17:23:24 2007" -->
<!-- isoreceived="20071016212324" -->
<!-- sent="Tue, 16 Oct 2007 17:23:19 -0400" -->
<!-- isosent="20071016212319" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Handling &amp;quot;Interrupted system call&amp;quot; with MTT" -->
<!-- id="20071016212319.GD9693_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B8DF3429-5821-42FA-B047-8CE503A2E2CE_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 17:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bail is that &quot;make&quot; will eventually succeed or fail with
<br>
something other than &quot;interrupted system call&quot;. Do we need 
<br>
another condition?
<br>
<p>I do not know which system call is getting interrupted, but
<br>
here's an interesting article on how different Unixes deal
<br>
with connect() interruptions:
<br>
<p>&nbsp;&nbsp;<a href="http://www.madore.org/~david/computers/connect-intr.html">http://www.madore.org/~david/computers/connect-intr.html</a>
<br>
<p>-Ethan
<br>
<p><p>On Tue, Oct/16/2007 04:59:29PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ick!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a long-known problem [apparently] with Sun's NFS,  
</span><br>
<span class="quotelev1">&gt; unfortunately.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd be ok with this if there is an eventual bail out of the loop --  
</span><br>
<span class="quotelev1">&gt; the prospect of an infinite loop is a bit scary for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 16, 2007, at 11:23 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On certain NFS servers, I run into the error message
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Interrupted system call&quot; when executing long running
</span><br>
<span class="quotelev2">&gt; &gt; commands such as &quot;make all&quot;. One solution I've been able to
</span><br>
<span class="quotelev2">&gt; &gt; use is to setup an NFS mount point solely for the cluster
</span><br>
<span class="quotelev2">&gt; &gt; I'm using, but this is not always an option. The below link
</span><br>
<span class="quotelev2">&gt; &gt; advises to restart the build on &quot;Interrupted system call&quot;:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://developers.sun.com/solaris/articles/parallel_make.html">http://developers.sun.com/solaris/articles/parallel_make.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wrapped the GNU_Install.pm make commands in a do-while to
</span><br>
<span class="quotelev2">&gt; &gt; effect the build restarts. E.g.,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   do {
</span><br>
<span class="quotelev2">&gt; &gt;       $x = MTT::DoCommand::Cmd(&quot;make install&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;   } while (!MTT::DoCommand::wsuccess($x-&gt;{exit_status}) and ($x-&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; {result_stderr} =~ /interrupted system call/i));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As long as make emits &quot;interrupted system call&quot; and fails,
</span><br>
<span class="quotelev2">&gt; &gt; MTT will keep restarting make.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I realize this is ugly, but is it acceptable?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
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
