<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 14 17:33:32 2006" -->
<!-- isoreceived="20060914213332" -->
<!-- sent="Thu, 14 Sep 2006 17:33:30 -0400" -->
<!-- isosent="20060914213330" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] New stuff" -->
<!-- id="20060914213329.GA183_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="79B32603-BDF9-42AE-A60A-C8CFAC28CDAE_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-09-14 17:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0093.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>In reply to:</strong> <a href="0091.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0093.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Reply:</strong> <a href="0093.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep/14/2006 05:20:23PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Maybe I jumped the gun a bit, but I just updated and tried to run mtt  
</span><br>
<span class="quotelev1">&gt; and get the following error message when I run:
</span><br>
<span class="quotelev1">&gt; Reading ini file: /u/mpiteam/local/etc/ompi-iu-odin-core.ini
</span><br>
<span class="quotelev1">&gt; *** WARNING: Could not read INI file:
</span><br>
<span class="quotelev1">&gt;      /u/mpiteam/local/etc/ompi-iu-odin-core.ini; skipping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The file exists and was working previously. Any thoughts on why this  
</span><br>
<span class="quotelev1">&gt; might happen?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Never seen this one. I think I need more details. Could you do:
<br>
<p>$ client/mtt -f file.ini | tee mtt.out
<br>
$ cat mtt.out
<br>
$ ls -l file.ini
<br>
<p>I assume the mtt.out is very short if it's dying while trying to read the ini.
<br>
<p>Thanks!
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2006, at 2:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Howdy MTT users!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have a bunch of important updates for you, including some that  
</span><br>
<span class="quotelev2">&gt; &gt; *REQURE*
</span><br>
<span class="quotelev2">&gt; &gt; action tomorrow morning (15 Sep 2006: update your client and update  
</span><br>
<span class="quotelev2">&gt; &gt; your INI
</span><br>
<span class="quotelev2">&gt; &gt; files).  Please go read the full text of the announcement here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://svn.open-mpi.org/trac/mtt/wiki/News-14-Sep-2006">http://svn.open-mpi.org/trac/mtt/wiki/News-14-Sep-2006</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As usual, please let us know if you have any questions, comments,  
</span><br>
<span class="quotelev2">&gt; &gt; feedback,
</span><br>
<span class="quotelev2">&gt; &gt; etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0093.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>In reply to:</strong> <a href="0091.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0093.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Reply:</strong> <a href="0093.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
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
