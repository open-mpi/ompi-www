<?
$subject_val = "Re: [OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  2 10:08:22 2013" -->
<!-- isoreceived="20130402140822" -->
<!-- sent="Tue, 02 Apr 2013 21:08:10 +0700" -->
<!-- isosent="20130402140810" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory per core/process" -->
<!-- id="515AE64A.8010106_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="446669CA-EC16-45FE-8085-2227CC0FC00B_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] memory per core/process<br>
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-02 10:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21656.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21654.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21652.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21654.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/2/13 6:42 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun -npernode 1 -tag-output  sh -c &quot;ulimit -a&quot;
</span><br>
You are right :)
<br>
<p>$ /usr/local/bin/mpirun -npernode 1 -tag-output  sh -c &quot;ulimit -a&quot;
<br>
[1,0]&lt;stdout&gt;:core file size          (blocks, -c) 0
<br>
[1,0]&lt;stdout&gt;:data seg size           (kbytes, -d) unlimited
<br>
[1,0]&lt;stdout&gt;:scheduling priority             (-e) 0
<br>
[1,0]&lt;stdout&gt;:file size               (blocks, -f) unlimited
<br>
[1,0]&lt;stdout&gt;:pending signals                 (-i) 8271027
<br>
[1,0]&lt;stdout&gt;:max locked memory       (kbytes, -l) unlimited
<br>
[1,0]&lt;stdout&gt;:max memory size         (kbytes, -m) unlimited
<br>
[1,0]&lt;stdout&gt;:open files                      (-n) 32768
<br>
[1,0]&lt;stdout&gt;:pipe size            (512 bytes, -p) 8
<br>
[1,0]&lt;stdout&gt;:POSIX message queues     (bytes, -q) 819200
<br>
[1,0]&lt;stdout&gt;:real-time priority              (-r) 0
<br>
[1,0]&lt;stdout&gt;:stack size              (kbytes, -s) unlimited
<br>
[1,0]&lt;stdout&gt;:cpu time               (seconds, -t) unlimited
<br>
[1,0]&lt;stdout&gt;:max user processes              (-u) 8192
<br>
[1,0]&lt;stdout&gt;:virtual memory          (kbytes, -v) unlimited
<br>
[1,0]&lt;stdout&gt;:file locks                      (-x) unlimited
<br>
[1,1]&lt;stdout&gt;:core file size          (blocks, -c) 0
<br>
[1,1]&lt;stdout&gt;:data seg size           (kbytes, -d) unlimited
<br>
[1,1]&lt;stdout&gt;:scheduling priority             (-e) 0
<br>
[1,1]&lt;stdout&gt;:file size               (blocks, -f) unlimited
<br>
[1,1]&lt;stdout&gt;:pending signals                 (-i) 8271027
<br>
[1,1]&lt;stdout&gt;:max locked memory       (kbytes, -l) unlimited
<br>
[1,1]&lt;stdout&gt;:max memory size         (kbytes, -m) unlimited
<br>
[1,1]&lt;stdout&gt;:open files                      (-n) 32768
<br>
[1,1]&lt;stdout&gt;:pipe size            (512 bytes, -p) 8
<br>
[1,1]&lt;stdout&gt;:POSIX message queues     (bytes, -q) 819200
<br>
[1,1]&lt;stdout&gt;:real-time priority              (-r) 0
<br>
[1,1]&lt;stdout&gt;:stack size              (kbytes, -s) unlimited
<br>
[1,1]&lt;stdout&gt;:cpu time               (seconds, -t) unlimited
<br>
[1,1]&lt;stdout&gt;:max user processes              (-u) 8192
<br>
[1,1]&lt;stdout&gt;:virtual memory          (kbytes, -v) unlimited
<br>
[1,1]&lt;stdout&gt;:file locks                      (-x) unlimited
<br>
[1,2]&lt;stdout&gt;:core file size          (blocks, -c) 0
<br>
[1,2]&lt;stdout&gt;:data seg size           (kbytes, -d) unlimited
<br>
[1,2]&lt;stdout&gt;:scheduling priority             (-e) 0
<br>
[1,2]&lt;stdout&gt;:file size               (blocks, -f) unlimited
<br>
[1,2]&lt;stdout&gt;:pending signals                 (-i) 8271027
<br>
[1,2]&lt;stdout&gt;:max locked memory       (kbytes, -l) unlimited
<br>
[1,2]&lt;stdout&gt;:max memory size         (kbytes, -m) unlimited
<br>
[1,2]&lt;stdout&gt;:open files                      (-n) 32768
<br>
[1,2]&lt;stdout&gt;:pipe size            (512 bytes, -p) 8
<br>
[1,2]&lt;stdout&gt;:POSIX message queues     (bytes, -q) 819200
<br>
[1,2]&lt;stdout&gt;:real-time priority              (-r) 0
<br>
[1,2]&lt;stdout&gt;:stack size              (kbytes, -s) unlimited
<br>
[1,2]&lt;stdout&gt;:cpu time               (seconds, -t) unlimited
<br>
[1,2]&lt;stdout&gt;:max user processes              (-u) 8192
<br>
[1,2]&lt;stdout&gt;:virtual memory          (kbytes, -v) unlimited
<br>
[1,2]&lt;stdout&gt;:file locks                      (-x) unlimited
<br>
[1,3]&lt;stdout&gt;:core file size          (blocks, -c) 0
<br>
[1,3]&lt;stdout&gt;:data seg size           (kbytes, -d) unlimited
<br>
[1,3]&lt;stdout&gt;:scheduling priority             (-e) 0
<br>
[1,3]&lt;stdout&gt;:file size               (blocks, -f) unlimited
<br>
[1,3]&lt;stdout&gt;:pending signals                 (-i) 8271027
<br>
[1,3]&lt;stdout&gt;:max locked memory       (kbytes, -l) unlimited
<br>
[1,3]&lt;stdout&gt;:max memory size         (kbytes, -m) unlimited
<br>
[1,3]&lt;stdout&gt;:open files                      (-n) 32768
<br>
[1,3]&lt;stdout&gt;:pipe size            (512 bytes, -p) 8
<br>
[1,3]&lt;stdout&gt;:POSIX message queues     (bytes, -q) 819200
<br>
[1,3]&lt;stdout&gt;:real-time priority              (-r) 0
<br>
[1,3]&lt;stdout&gt;:stack size              (kbytes, -s) unlimited
<br>
[1,3]&lt;stdout&gt;:cpu time               (seconds, -t) unlimited
<br>
[1,3]&lt;stdout&gt;:max user processes              (-u) 8192
<br>
[1,3]&lt;stdout&gt;:virtual memory          (kbytes, -v) unlimited
<br>
[1,3]&lt;stdout&gt;:file locks                      (-x) unlimited
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21656.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21654.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21652.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21654.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
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
