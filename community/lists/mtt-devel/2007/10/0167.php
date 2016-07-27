<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 18:36:30 2007" -->
<!-- isoreceived="20071016223630" -->
<!-- sent="Tue, 16 Oct 2007 18:36:26 -0400" -->
<!-- isosent="20071016223626" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Handling &amp;quot;Interrupted system call&amp;quot; with MTT" -->
<!-- id="20071016223625.GE9693_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="35CD10F4-2355-41E6-B778-C0B411823663_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-16 18:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct/16/2007 05:37:18PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 16, 2007, at 5:23 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The bail is that &quot;make&quot; will eventually succeed or fail
</span><br>
<span class="quotelev2">&gt; &gt; with something other than &quot;interrupted system call&quot;. Do
</span><br>
<span class="quotelev2">&gt; &gt; we need another condition?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm just worried that Sun's NFS will somehow get in a
</span><br>
<span class="quotelev1">&gt; perpetual &quot;interrupted system call&quot; loop such that you'll
</span><br>
<span class="quotelev1">&gt; never actually break out of it.
</span><br>
<p><p>How about a counter? E.g., after &quot;x&quot; number of &quot;interrupted
<br>
system call&quot; messages, MTT moves on. Or should the &quot;command
<br>
restart&quot; go in DoCommand.pm so we can have a timeout?
<br>
<p>I also noticed that our build script (which prints hundreds
<br>
of &quot;interrupted system call&quot; messages per build, but does
<br>
not seem to die because of them) uses &quot;make -j 24&quot; while MTT
<br>
has been using &quot;make -j 4&quot;. I'll experiment with -j.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I do not know which system call is getting interrupted, but
</span><br>
<span class="quotelev2">&gt; &gt; here's an interesting article on how different Unixes deal
</span><br>
<span class="quotelev2">&gt; &gt; with connect() interruptions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.madore.org/~david/computers/connect-intr.html">http://www.madore.org/~david/computers/connect-intr.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Oct/16/2007 04:59:29PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ick!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is a long-known problem [apparently] with Sun's NFS,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unfortunately.  :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'd be ok with this if there is an eventual bail out of the loop --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the prospect of an infinite loop is a bit scary for me.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 16, 2007, at 11:23 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On certain NFS servers, I run into the error message
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;Interrupted system call&quot; when executing long running
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; commands such as &quot;make all&quot;. One solution I've been able to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; use is to setup an NFS mount point solely for the cluster
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm using, but this is not always an option. The below link
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; advises to restart the build on &quot;Interrupted system call&quot;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   <a href="http://developers.sun.com/solaris/articles/parallel_make.html">http://developers.sun.com/solaris/articles/parallel_make.html</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I wrapped the GNU_Install.pm make commands in a do-while to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; effect the build restarts. E.g.,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   do {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       $x = MTT::DoCommand::Cmd(&quot;make install&quot;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   } while (!MTT::DoCommand::wsuccess($x-&gt;{exit_status}) and ($x-&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {result_stderr} =~ /interrupted system call/i));
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As long as make emits &quot;interrupted system call&quot; and fails,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MTT will keep restarting make.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I realize this is ugly, but is it acceptable?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0166.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
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
