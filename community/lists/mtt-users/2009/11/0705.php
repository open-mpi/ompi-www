<?
$subject_val = "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 15:15:47 2009" -->
<!-- isoreceived="20091118201547" -->
<!-- sent="Wed, 18 Nov 2009 12:17:24 -0800" -->
<!-- isosent="20091118201724" -->
<!-- name="Venkat Venkatsubra" -->
<!-- email="venkat_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5" -->
<!-- id="8A71B368A89016469F72CD08050AD33406D9CE4E_at_maui.asicdesigners.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091118194125.GI53339_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5<br>
<strong>From:</strong> Venkat Venkatsubra (<em>venkat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 15:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Reply:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached.
<br>
<p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
<br>
Sent: Wednesday, November 18, 2009 1:41 PM
<br>
To: General user list for the MPI Testing Tool
<br>
Subject: Re: [MTT users] MTT trivial tests fails to completeon
<br>
Centos5.3-x86_64 bit platform with OFED 1.5
<br>
<p>Could you run with --debug (instead of --verbose), and send the
<br>
output.
<br>
<p>Thanks,
<br>
Ethan
<br>
<p>On Wed, Nov/18/2009 11:08:18AM, Venkat Venkatsubra wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    From: Venkat Venkatsubra
</span><br>
<span class="quotelev1">&gt;    Sent: Wednesday, November 18, 2009 12:54 PM
</span><br>
<span class="quotelev1">&gt;    To: 'mtt-users_at_[hidden]'
</span><br>
<span class="quotelev1">&gt;    Subject: MTT trivial tests fails to complete on Centos5.3-x86_64
</span><br>
bit
<br>
<span class="quotelev1">&gt;    platform with OFED 1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    How do I debug this problem ? Attached are the developer.ini and
</span><br>
<span class="quotelev1">&gt;    trivial.ini files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I can provide any other information that you need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [root_at_samples]# cat /etc/issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    CentOS release 5.3 (Final)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Kernel \r on an \m
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [root_at_samples]# uname -a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Linux 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64
</span><br>
x86_64
<br>
<span class="quotelev1">&gt;    x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am running OFED-1.5-20091029-0617 daily build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Started trivial tests using the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [root_at_samples]# cat developer.ini trivial.ini | ../client/mtt
</span><br>
--verbose -
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** Reporter initialized
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** MPI Get phase starting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; MPI Get: [mpi get: my installation]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Checking for new MPI sources...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Using MPI in: /usr/mpi/gcc/openmpi-1.3.2/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** WARNING: alreadyinstalled_mpi_type was not specified,
</span><br>
defaulting to
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         &quot;OMPI&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Got new MPI sources: version 1.3.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** MPI Get phase complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** MPI Install phase starting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; MPI Install [mpi install: my installation]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Installing MPI: [my installation] / [1.3.2] / [my
</span><br>
installation]...
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
htm
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       l
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
txt
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Completed MPI Install successfully
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** MPI Install phase complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** Test Get phase starting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Test Get: [test get: trivial]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Got new test sources
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** Test Get phase complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** Test Build phase starting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Test Build [test build: trivial]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Building for [my installation] / [1.3.2] / [my installation] /
</span><br>
<span class="quotelev1">&gt;    [trivial]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Completed test build successfully
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** Test Build phase complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *** Test Run phase starting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Test Run [trivial]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Running with [my installation] / [1.3.2] / [my installation]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Using MPI Details [open mpi] with MPI Install [my installation]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    During this stage the test stalls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    After about ~10 minutes the test gets killed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    dmesg on which the test is running displays the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ==========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Dmesg output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ==========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Out of memory: Killed process 5346 (gdmgreeter).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     audispd invoked oom-killer: gfp_mask=0x201d2, order=0,
</span><br>
oomkilladj=0
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Call Trace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff800c39dd&gt;] out_of_memory+0x8e/0x2f5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff8000f2eb&gt;] __alloc_pages+0x245/0x2ce
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff80012a62&gt;] __do_page_cache_readahead+0x95/0x1d9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff80215932&gt;] sock_readv+0xb7/0xd1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff80088896&gt;] __wake_up_common+0x3e/0x68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff80013401&gt;] filemap_nopage+0x148/0x322
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff80008863&gt;] __handle_mm_fault+0x1f8/0xe5c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff80066b9a&gt;] do_page_fault+0x4cb/0x830
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [&lt;ffffffff8005dde9&gt;] error_exit+0x0/0x84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Venkat
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p>_______________________________________________
<br>
mtt-users mailing list
<br>
mtt-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0705/debug.txt">debug.txt</a>
</ul>
<!-- attachment="debug.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to complete on	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Reply:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
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
