<?
$subject_val = "[MTT users] MTT trivial tests fails to complete on Centos5.3-x86_64 bit platform with OFED 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 14:07:06 2009" -->
<!-- isoreceived="20091118190706" -->
<!-- sent="Wed, 18 Nov 2009 11:08:18 -0800" -->
<!-- isosent="20091118190818" -->
<!-- name="Venkat Venkatsubra" -->
<!-- email="venkat_at_[hidden]" -->
<!-- subject="[MTT users] MTT trivial tests fails to complete on Centos5.3-x86_64 bit platform with OFED 1.5" -->
<!-- id="8A71B368A89016469F72CD08050AD33406D9CE00_at_maui.asicdesigners.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] MTT trivial tests fails to complete on Centos5.3-x86_64 bit platform with OFED 1.5<br>
<strong>From:</strong> Venkat Venkatsubra (<em>venkat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 14:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0702.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Reply:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: Venkat Venkatsubra 
<br>
Sent: Wednesday, November 18, 2009 12:54 PM
<br>
To: 'mtt-users_at_[hidden]'
<br>
Subject: MTT trivial tests fails to complete on Centos5.3-x86_64 bit
<br>
platform with OFED 1.5
<br>
<p>&nbsp;
<br>
<p>Hello All,
<br>
<p>&nbsp;
<br>
<p>How do I debug this problem ? Attached are the developer.ini and
<br>
trivial.ini files.
<br>
<p>I can provide any other information that you need.
<br>
<p>&nbsp;
<br>
<p>[root_at_samples]# cat /etc/issue
<br>
<p>CentOS release 5.3 (Final)
<br>
<p>Kernel \r on an \m
<br>
<p>&nbsp;
<br>
<p>[root_at_samples]# uname -a
<br>
<p>Linux 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64 x86_64
<br>
x86_64 GNU/Linux
<br>
<p>&nbsp;
<br>
<p>I am running OFED-1.5-20091029-0617 daily build.
<br>
<p>&nbsp;
<br>
<p>Started trivial tests using the following command:
<br>
<p>&nbsp;
<br>
<p>[root_at_samples]# cat developer.ini trivial.ini | ../client/mtt --verbose
<br>
-
<br>
<p>....
<br>
<p>....
<br>
<p><span class="quotelev2"> &gt;&gt; Initializing reporter module: TextFile
</span><br>
<p>&nbsp;*** Reporter initialized
<br>
<p>&nbsp;*** MPI Get phase starting
<br>
<p><span class="quotelev2"> &gt;&gt; MPI Get: [mpi get: my installation]
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Checking for new MPI sources...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Using MPI in: /usr/mpi/gcc/openmpi-1.3.2/
<br>
<p>&nbsp;*** WARNING: alreadyinstalled_mpi_type was not specified, defaulting to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;OMPI&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Got new MPI sources: version 1.3.2
<br>
<p>&nbsp;*** MPI Get phase complete
<br>
<p>&nbsp;*** MPI Install phase starting
<br>
<p><span class="quotelev2"> &gt;&gt; MPI Install [mpi install: my installation]
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Installing MPI: [my installation] / [1.3.2] / [my installation]...
<br>
<p><span class="quotelev2"> &gt;&gt; Reported to text file
</span><br>
<p>&nbsp;
<br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
htm
<br>
<p>&nbsp;&nbsp;&nbsp;l
<br>
<p><span class="quotelev2"> &gt;&gt; Reported to text file
</span><br>
<p>&nbsp;
<br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
txt
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Completed MPI Install successfully
<br>
<p>&nbsp;*** MPI Install phase complete
<br>
<p>&nbsp;*** Test Get phase starting
<br>
<p><span class="quotelev2"> &gt;&gt; Test Get: [test get: trivial]
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Checking for new test sources...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Got new test sources
<br>
<p>&nbsp;*** Test Get phase complete
<br>
<p>&nbsp;*** Test Build phase starting
<br>
<p><span class="quotelev2"> &gt;&gt; Test Build [test build: trivial]
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Building for [my installation] / [1.3.2] / [my installation] /
<br>
[trivial]
<br>
<p><span class="quotelev2"> &gt;&gt; Reported to text file
</span><br>
<p>&nbsp;&nbsp;&nbsp;/root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
<br>
<p><span class="quotelev2"> &gt;&gt; Reported to text file
</span><br>
<p>&nbsp;&nbsp;&nbsp;/root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Completed test build successfully
<br>
<p>&nbsp;*** Test Build phase complete
<br>
<p>&nbsp;*** Test Run phase starting
<br>
<p><span class="quotelev2"> &gt;&gt; Test Run [trivial]
</span><br>
<p><span class="quotelev2"> &gt;&gt; Running with [my installation] / [1.3.2] / [my installation]
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Using MPI Details [open mpi] with MPI Install [my installation]
<br>
<p>&nbsp;&nbsp;
<br>
<p>During this stage the test stalls.
<br>
<p>After about ~10 minutes the test gets killed.
<br>
<p>dmesg on which the test is running displays the following output:
<br>
<p>&nbsp;
<br>
<p>&nbsp;==========
<br>
<p>&nbsp;Dmesg output
<br>
<p>&nbsp;==========
<br>
<p>&nbsp;Out of memory: Killed process 5346 (gdmgreeter).
<br>
<p>&nbsp;audispd invoked oom-killer: gfp_mask=0x201d2, order=0, oomkilladj=0
<br>
<p>&nbsp;
<br>
<p>&nbsp;Call Trace:
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff800c39dd&gt;] out_of_memory+0x8e/0x2f5
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff8000f2eb&gt;] __alloc_pages+0x245/0x2ce
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff80012a62&gt;] __do_page_cache_readahead+0x95/0x1d9
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff80215932&gt;] sock_readv+0xb7/0xd1
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff80088896&gt;] __wake_up_common+0x3e/0x68
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff80013401&gt;] filemap_nopage+0x148/0x322
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff80008863&gt;] __handle_mm_fault+0x1f8/0xe5c
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff80066b9a&gt;] do_page_fault+0x4cb/0x830
<br>
<p>&nbsp;&nbsp;[&lt;ffffffff8005dde9&gt;] error_exit+0x0/0x84
<br>
<p>&nbsp;
<br>
<p>Thanks!
<br>
<p>&nbsp;
<br>
<p>Venkat
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0703/developer.ini">developer.ini</a>
</ul>
<!-- attachment="developer.ini" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0703/trivial.ini">trivial.ini</a>
</ul>
<!-- attachment="trivial.ini" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0702.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Reply:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
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
