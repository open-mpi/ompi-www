<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 09:29:30 2006" -->
<!-- isoreceived="20060915132930" -->
<!-- sent="Thu, 14 Sep 2006 18:28:17 -0400" -->
<!-- isosent="20060914222817" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] New stuff" -->
<!-- id="20060914222813.GA35805_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A33EAF0B-F244-4936-B309-8A7C0B3DBD0A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-09-14 18:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0097.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT users] New stuff"</a>
<li><strong>In reply to:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Reply:</strong> <a href="0097.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep/14/2006 05:49:11PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; After iterating a bit with Jeff. It seems that the error indicates  
</span><br>
<span class="quotelev1">&gt; that I had a malformed ini file. I accidently left a bit of the old  
</span><br>
<span class="quotelev1">&gt; script in there when I updated. :[
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After removing that and doing a sanity check for other bits things  
</span><br>
<span class="quotelev1">&gt; are working once again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>For future reference, what was the malformation? If I had to
<br>
guess I'd say it was a missing '[' or ']' on a section
<br>
divider, a missing '=' or 'EOT' on a parameter assignment.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; Thanks :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2006, at 5:36 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here you go:
</span><br>
<span class="quotelev2">&gt; &gt; [mpiteam_at_odin ~/mtt]$ ./client/mtt --mpi-get --mpi-install --scratch /
</span><br>
<span class="quotelev2">&gt; &gt; u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18 --file /u/mpiteam/
</span><br>
<span class="quotelev2">&gt; &gt; local/etc/ompi-iu-odin-core.ini --verbose --print-time --debug | tee
</span><br>
<span class="quotelev2">&gt; &gt; ~/mtt.out
</span><br>
<span class="quotelev2">&gt; &gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev2">&gt; &gt; *** MTT: ./client/mtt --mpi-get --mpi-install --scratch
</span><br>
<span class="quotelev2">&gt; &gt;     /u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18 --file
</span><br>
<span class="quotelev2">&gt; &gt;     /u/mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
</span><br>
<span class="quotelev2">&gt; &gt;     --debug
</span><br>
<span class="quotelev2">&gt; &gt; Scratch: /u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
</span><br>
<span class="quotelev2">&gt; &gt; Scratch resolved:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
</span><br>
<span class="quotelev2">&gt; &gt; Making dir:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/
</span><br>
<span class="quotelev2">&gt; &gt; sources (cwd:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
</span><br>
<span class="quotelev2">&gt; &gt; Making dir:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/ 
</span><br>
<span class="quotelev2">&gt; &gt; installs
</span><br>
<span class="quotelev2">&gt; &gt;     (cwd: /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
</span><br>
<span class="quotelev2">&gt; &gt; Reading ini file: /u/mpiteam/local/etc/ompi-iu-odin-core.ini
</span><br>
<span class="quotelev2">&gt; &gt; *** WARNING: Could not read INI file:
</span><br>
<span class="quotelev2">&gt; &gt;      /u/mpiteam/local/etc/ompi-iu-odin-core.ini; skipping
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mpiteam_at_odin ~/mtt]$ cat ~/mtt.out
</span><br>
<span class="quotelev2">&gt; &gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev2">&gt; &gt; *** MTT: ./client/mtt --mpi-get --mpi-install --scratch
</span><br>
<span class="quotelev2">&gt; &gt;     /u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18 --file
</span><br>
<span class="quotelev2">&gt; &gt;     /u/mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
</span><br>
<span class="quotelev2">&gt; &gt;     --debug
</span><br>
<span class="quotelev2">&gt; &gt; Scratch: /u/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
</span><br>
<span class="quotelev2">&gt; &gt; Scratch resolved:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18
</span><br>
<span class="quotelev2">&gt; &gt; Making dir:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/
</span><br>
<span class="quotelev2">&gt; &gt; sources (cwd:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
</span><br>
<span class="quotelev2">&gt; &gt; Making dir:
</span><br>
<span class="quotelev2">&gt; &gt;     /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18/ 
</span><br>
<span class="quotelev2">&gt; &gt; installs
</span><br>
<span class="quotelev2">&gt; &gt;     (cwd: /san/homedirs/mpiteam/mtt-runs/Testing-09-14-2006-17-14-18)
</span><br>
<span class="quotelev2">&gt; &gt; Reading ini file: /u/mpiteam/local/etc/ompi-iu-odin-core.ini
</span><br>
<span class="quotelev2">&gt; &gt; *** WARNING: Could not read INI file:
</span><br>
<span class="quotelev2">&gt; &gt;      /u/mpiteam/local/etc/ompi-iu-odin-core.ini; skipping
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mpiteam_at_odin ~/mtt]$ ls -l ~/local/etc/ompi-iu-odin-core.ini
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r-----  1 mpiteam projects 13741 Sep 14 17:01 /u/mpiteam/local/
</span><br>
<span class="quotelev2">&gt; &gt; etc/ompi-iu-odin-core.ini
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 14, 2006, at 5:33 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Sep/14/2006 05:20:23PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Maybe I jumped the gun a bit, but I just updated and tried to run  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and get the following error message when I run:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Reading ini file: /u/mpiteam/local/etc/ompi-iu-odin-core.ini
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** WARNING: Could not read INI file:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      /u/mpiteam/local/etc/ompi-iu-odin-core.ini; skipping
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The file exists and was working previously. Any thoughts on why this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; might happen?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Never seen this one. I think I need more details. Could you do:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ client/mtt -f file.ini | tee mtt.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ cat mtt.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ ls -l file.ini
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I assume the mtt.out is very short if it's dying while trying to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; read the ini.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 14, 2006, at 2:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Howdy MTT users!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; We have a bunch of important updates for you, including some that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; *REQURE*
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; action tomorrow morning (15 Sep 2006: update your client and update
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; your INI
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; files).  Please go read the full text of the announcement here:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     <a href="http://svn.open-mpi.org/trac/mtt/wiki/News-14-Sep-2006">http://svn.open-mpi.org/trac/mtt/wiki/News-14-Sep-2006</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As usual, please let us know if you have any questions, comments,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; feedback,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt; &gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="0097.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0095.php">Jeff Squyres: "Re: [MTT users] New stuff"</a>
<li><strong>In reply to:</strong> <a href="0094.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
<li><strong>Reply:</strong> <a href="0097.php">Josh Hursey: "Re: [MTT users] New stuff"</a>
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
