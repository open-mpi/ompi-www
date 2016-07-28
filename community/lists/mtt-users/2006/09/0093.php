<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 14 17:36:22 2006" -->
<!-- isoreceived="20060914213622" -->
<!-- sent="Thu, 14 Sep 2006 17:36:16 -0400" -->
<!-- isosent="20060914213616" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] New stuff" -->
<!-- id="949C1AFC-0206-4C47-A98C-1D86EB326539_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060914213329.GA183_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-14 17:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0092.php">Ethan Mallove: "Re: [MTT users] New stuff"</a>
<li><strong>In reply to:</strong> <a href="0092.php">Ethan Mallove: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Reply:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here you go:
<br>
[mpiteam_at_odin ~/mtt]$ ./client/mtt --mpi-get --mpi-install --scratch / 
<br>
u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18 --file /u/mpiteam/ 
<br>
local/etc/ompi-iu-odin-core.ini --verbose --print-time --debug | tee  
<br>
~/mtt.out
<br>
Debug is 1, Verbose is 1
<br>
*** MTT: ./client/mtt --mpi-get --mpi-install --scratch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18 --file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/u/mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--debug
<br>
Scratch: /u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
<br>
Scratch resolved:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
<br>
Making dir:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/ 
<br>
sources (cwd:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
<br>
Making dir:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/installs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(cwd: /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
<br>
Reading ini file: /u/mpiteam/local/etc/ompi-iu-odin-core.ini
<br>
*** WARNING: Could not read INI file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/u/mpiteam/local/etc/ompi-iu-odin-core.ini; skipping
<br>
<p>[mpiteam_at_odin ~/mtt]$ cat ~/mtt.out
<br>
Debug is 1, Verbose is 1
<br>
*** MTT: ./client/mtt --mpi-get --mpi-install --scratch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18 --file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/u/mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--debug
<br>
Scratch: /u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
<br>
Scratch resolved:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
<br>
Making dir:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/ 
<br>
sources (cwd:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
<br>
Making dir:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/installs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(cwd: /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
<br>
Reading ini file: /u/mpiteam/local/etc/ompi-iu-odin-core.ini
<br>
*** WARNING: Could not read INI file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/u/mpiteam/local/etc/ompi-iu-odin-core.ini; skipping
<br>
<p>[mpiteam_at_odin ~/mtt]$ ls -l ~/local/etc/ompi-iu-odin-core.ini
<br>
-rw-r-----  1 mpiteam projects 13741 Sep 14 17:01 /u/mpiteam/local/ 
<br>
etc/ompi-iu-odin-core.ini
<br>
<p>On Sep 14, 2006, at 5:33 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Sep/14/2006 05:20:23PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I jumped the gun a bit, but I just updated and tried to run mtt
</span><br>
<span class="quotelev2">&gt;&gt; and get the following error message when I run:
</span><br>
<span class="quotelev2">&gt;&gt; Reading ini file: /u/mpiteam/local/etc/ompi-iu-odin-core.ini
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: Could not read INI file:
</span><br>
<span class="quotelev2">&gt;&gt;      /u/mpiteam/local/etc/ompi-iu-odin-core.ini; skipping
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file exists and was working previously. Any thoughts on why this
</span><br>
<span class="quotelev2">&gt;&gt; might happen?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Never seen this one. I think I need more details. Could you do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ client/mtt -f file.ini | tee mtt.out
</span><br>
<span class="quotelev1">&gt; $ cat mtt.out
</span><br>
<span class="quotelev1">&gt; $ ls -l file.ini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume the mtt.out is very short if it's dying while trying to  
</span><br>
<span class="quotelev1">&gt; read the ini.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 14, 2006, at 2:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howdy MTT users!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a bunch of important updates for you, including some that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *REQURE*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; action tomorrow morning (15 Sep 2006: update your client and update
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your INI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files).  Please go read the full text of the announcement here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://svn.open-mpi.org/trac/mtt/wiki/News-14-Sep-2006">http://svn.open-mpi.org/trac/mtt/wiki/News-14-Sep-2006</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As usual, please let us know if you have any questions, comments,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feedback,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0092.php">Ethan Mallove: "Re: [MTT users] New stuff"</a>
<li><strong>In reply to:</strong> <a href="0092.php">Ethan Mallove: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Reply:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
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
