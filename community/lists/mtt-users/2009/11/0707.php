<?
$subject_val = "Re: [MTT users] MTT trivial tests fails tocompleteon Centos5.3-x86_64 bit platform with OFED 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 11:51:55 2009" -->
<!-- isoreceived="20091119165155" -->
<!-- sent="Thu, 19 Nov 2009 08:53:12 -0800" -->
<!-- isosent="20091119165312" -->
<!-- name="Venkat Venkatsubra" -->
<!-- email="venkat_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT trivial tests fails tocompleteon Centos5.3-x86_64 bit platform with OFED 1.5" -->
<!-- id="8A71B368A89016469F72CD08050AD33406D9D075_at_maui.asicdesigners.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091119143539.GJ53339_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT trivial tests fails tocompleteon Centos5.3-x86_64 bit platform with OFED 1.5<br>
<strong>From:</strong> Venkat Venkatsubra (<em>venkat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 11:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Reply:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ethan,
<br>
<p>Yes, we are using <a href="http://svn.open-mpi.org/svn/mtt/trunk">http://svn.open-mpi.org/svn/mtt/trunk</a>.
<br>
After &quot;svn update&quot; when I rerun this is what the screen output looks
<br>
like.
<br>
<p>Debug is 1, Verbose is 1
<br>
*** MTT: ../client/mtt --debug -
<br>
*** Running on mughal
<br>
Chdir ../client
<br>
Chdir /root/mtt-svn/samples
<br>
Copying: stdin to /tmp/XzxTdnyg85.ini
<br>
Expanding include_file(s) parameters in /tmp/XzxTdnyg85.ini
<br>
Reading ini file: stdin
<br>
*** ERROR: Syntax error in stdin: Line 36 in file /tmp/UqPeD61ett.ini is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mal-formed:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Line 41 in file /tmp/UqPeD61ett.ini is mal-formed:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=======
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Line 53 in file /tmp/UqPeD61ett.ini is mal-formed:
<br>
<span class="quotelev3">            &gt;&gt;&gt;&gt;&gt;&gt;&gt; .r1337 at /root/mtt-svn/lib/MTT/Messages.pm line
</span><br>
121.
<br>
<p>Attached are the new developer.ini and the /tmp/UqPeD61ett.ini files.
<br>
<p>Venkat
<br>
<p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
<br>
Sent: Thursday, November 19, 2009 8:36 AM
<br>
To: General user list for the MPI Testing Tool
<br>
Subject: Re: [MTT users] MTT trivial tests fails tocompleteon
<br>
Centos5.3-x86_64 bit platform with OFED 1.5
<br>
<p>On Wed, Nov/18/2009 12:17:24PM, Venkat Venkatsubra wrote:
<br>
<span class="quotelev1">&gt; Attached.
</span><br>
<p>That developer.ini file is out-of-date. Can you &quot;svn update&quot;, and try
<br>
to run again? I assume the SVN URL you're using is
<br>
<a href="http://svn.open-mpi.org/svn/mtt/trunk">http://svn.open-mpi.org/svn/mtt/trunk</a>?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 18, 2009 1:41 PM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] MTT trivial tests fails to completeon
</span><br>
<span class="quotelev1">&gt; Centos5.3-x86_64 bit platform with OFED 1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you run with --debug (instead of --verbose), and send the
</span><br>
<span class="quotelev1">&gt; output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov/18/2009 11:08:18AM, Venkat Venkatsubra wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    From: Venkat Venkatsubra
</span><br>
<span class="quotelev2">&gt; &gt;    Sent: Wednesday, November 18, 2009 12:54 PM
</span><br>
<span class="quotelev2">&gt; &gt;    To: 'mtt-users_at_[hidden]'
</span><br>
<span class="quotelev2">&gt; &gt;    Subject: MTT trivial tests fails to complete on Centos5.3-x86_64
</span><br>
<span class="quotelev1">&gt; bit
</span><br>
<span class="quotelev2">&gt; &gt;    platform with OFED 1.5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Hello All,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    How do I debug this problem ? Attached are the developer.ini and
</span><br>
<span class="quotelev2">&gt; &gt;    trivial.ini files.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    I can provide any other information that you need.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    [root_at_samples]# cat /etc/issue
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    CentOS release 5.3 (Final)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Kernel \r on an \m
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    [root_at_samples]# uname -a
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Linux 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64
</span><br>
<span class="quotelev1">&gt; x86_64
</span><br>
<span class="quotelev2">&gt; &gt;    x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    I am running OFED-1.5-20091029-0617 daily build.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Started trivial tests using the following command:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    [root_at_samples]# cat developer.ini trivial.ini | ../client/mtt
</span><br>
<span class="quotelev1">&gt; --verbose -
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    ....
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    ....
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** Reporter initialized
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** MPI Get phase starting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; MPI Get: [mpi get: my installation]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Checking for new MPI sources...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Using MPI in: /usr/mpi/gcc/openmpi-1.3.2/
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** WARNING: alreadyinstalled_mpi_type was not specified,
</span><br>
<span class="quotelev1">&gt; defaulting to
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;OMPI&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Got new MPI sources: version 1.3.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** MPI Get phase complete
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** MPI Install phase starting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; MPI Install [mpi install: my installation]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Installing MPI: [my installation] / [1.3.2] / [my
</span><br>
<span class="quotelev1">&gt; installation]...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
<span class="quotelev1">&gt; htm
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       l
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
<span class="quotelev1">&gt; txt
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Completed MPI Install successfully
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** MPI Install phase complete
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** Test Get phase starting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Test Get: [test get: trivial]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Checking for new test sources...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Got new test sources
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** Test Get phase complete
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** Test Build phase starting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Test Build [test build: trivial]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Building for [my installation] / [1.3.2] / [my installation]
</span><br>
/
<br>
<span class="quotelev2">&gt; &gt;    [trivial]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Completed test build successfully
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** Test Build phase complete
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     *** Test Run phase starting
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Test Run [trivial]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;     &gt;&gt; Running with [my installation] / [1.3.2] / [my installation]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        Using MPI Details [open mpi] with MPI Install [my
</span><br>
installation]
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    During this stage the test stalls.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    After about ~10 minutes the test gets killed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    dmesg on which the test is running displays the following output:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     ==========
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     Dmesg output
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     ==========
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     Out of memory: Killed process 5346 (gdmgreeter).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     audispd invoked oom-killer: gfp_mask=0x201d2, order=0,
</span><br>
<span class="quotelev1">&gt; oomkilladj=0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     Call Trace:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff800c39dd&gt;] out_of_memory+0x8e/0x2f5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff8000f2eb&gt;] __alloc_pages+0x245/0x2ce
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff80012a62&gt;] __do_page_cache_readahead+0x95/0x1d9
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff80215932&gt;] sock_readv+0xb7/0xd1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff80088896&gt;] __wake_up_common+0x3e/0x68
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff80013401&gt;] filemap_nopage+0x148/0x322
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff80008863&gt;] __handle_mm_fault+0x1f8/0xe5c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff80066b9a&gt;] do_page_fault+0x4cb/0x830
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      [&lt;ffffffff8005dde9&gt;] error_exit+0x0/0x84
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Venkat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
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
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0707/developer.ini">developer.ini</a>
</ul>
<!-- attachment="developer.ini" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0707/UqPeD61ett.ini">UqPeD61ett.ini</a>
</ul>
<!-- attachment="UqPeD61ett.ini" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails to completeon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Reply:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
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
