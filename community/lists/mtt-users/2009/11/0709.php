<?
$subject_val = "Re: [MTT users] MTT trivial tests failstocomplete";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 17:03:26 2009" -->
<!-- isoreceived="20091119220326" -->
<!-- sent="Thu, 19 Nov 2009 14:05:06 -0800" -->
<!-- isosent="20091119220506" -->
<!-- name="Venkat Venkatsubra" -->
<!-- email="venkat_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT trivial tests failstocomplete" -->
<!-- id="8A71B368A89016469F72CD08050AD33406D9D13C_at_maui.asicdesigners.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091119173156.GK53339_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT trivial tests failstocomplete<br>
<strong>From:</strong> Venkat Venkatsubra (<em>venkat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 17:05:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<li><strong>Reply:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ethan,
<br>
<p>Thanks for your help.
<br>
I now started with a clean developer.ini and made only the following
<br>
change and reran.
<br>
# Fill this field in
<br>
hostlist = 102.77.77.63
<br>
hostlist_max_np = 1
<br>
max_np = 1
<br>
<p>It doesn't hang like it used to before. I get the below error.
<br>
...
<br>
...
<br>
Value got: Config::IniFiles=HASH(0x1ef499a0) mtt submit_group_results
<br>
Value returning:
<br>
Returining reference to an array of a single scalar
<br>
*** ERROR: Could not evaluate: $ret =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Functions::if(MTT::Values::Functions::have_hostfile(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Functions::join(&quot;--hostfile &quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Functions::hostfile()),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Functions::if(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Functions::have_hostlist(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Functions::join(&quot;--host &quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Functions::hostlist()),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);: Undefined subroutine &amp;MTT::Values::Functions::join called at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(eval 65) line 1, &lt;SHELL&gt; line 3.
<br>
<p>What should be the next developer.ini change that I should be making ?
<br>
<p>The complete output and the developer.ini attached.
<br>
<p>Thanks!
<br>
<p>Venkat
<br>
<p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
<br>
Sent: Thursday, November 19, 2009 11:32 AM
<br>
To: General user list for the MPI Testing Tool
<br>
Cc: Divya Manjunath
<br>
Subject: Re: [MTT users] MTT trivial tests failstocompleteon
<br>
Centos5.3-x86_64 bit platform with OFED 1.5
<br>
<p>On Thu, Nov/19/2009 08:53:12AM, Venkat Venkatsubra wrote:
<br>
<span class="quotelev1">&gt; Hi Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we are using <a href="http://svn.open-mpi.org/svn/mtt/trunk">http://svn.open-mpi.org/svn/mtt/trunk</a>.
</span><br>
<span class="quotelev1">&gt; After &quot;svn update&quot; when I rerun this is what the screen output looks
</span><br>
<span class="quotelev1">&gt; like.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev1">&gt; *** MTT: ../client/mtt --debug -
</span><br>
<span class="quotelev1">&gt; *** Running on mughal
</span><br>
<span class="quotelev1">&gt; Chdir ../client
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples
</span><br>
<span class="quotelev1">&gt; Copying: stdin to /tmp/XzxTdnyg85.ini
</span><br>
<span class="quotelev1">&gt; Expanding include_file(s) parameters in /tmp/XzxTdnyg85.ini
</span><br>
<span class="quotelev1">&gt; Reading ini file: stdin
</span><br>
<span class="quotelev1">&gt; *** ERROR: Syntax error in stdin: Line 36 in file /tmp/UqPeD61ett.ini
</span><br>
is
<br>
<span class="quotelev1">&gt;     mal-formed:
</span><br>
<span class="quotelev1">&gt;             &lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
</span><br>
<span class="quotelev1">&gt;     Line 41 in file /tmp/UqPeD61ett.ini is mal-formed:
</span><br>
<span class="quotelev1">&gt;             =======
</span><br>
<span class="quotelev1">&gt;     Line 53 in file /tmp/UqPeD61ett.ini is mal-formed:
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt;&gt;&gt;&gt; .r1337 at /root/mtt-svn/lib/MTT/Messages.pm line
</span><br>
<span class="quotelev1">&gt; 121.
</span><br>
<p>You have some SVN conflicts in your samples/developer.ini file.
<br>
Do you have your own local changes to that file, e.g., near the
<br>
&quot;hosts&quot; parameter? I think you just want to resolve those with:
<br>
<p>&nbsp;&nbsp;$ svn resolve --accept=theirs-conflict samples/developer.ini
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached are the new developer.ini and the /tmp/UqPeD61ett.ini files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Venkat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 19, 2009 8:36 AM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] MTT trivial tests fails tocompleteon
</span><br>
<span class="quotelev1">&gt; Centos5.3-x86_64 bit platform with OFED 1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov/18/2009 12:17:24PM, Venkat Venkatsubra wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That developer.ini file is out-of-date. Can you &quot;svn update&quot;, and try
</span><br>
<span class="quotelev1">&gt; to run again? I assume the SVN URL you're using is
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/mtt/trunk">http://svn.open-mpi.org/svn/mtt/trunk</a>?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, November 18, 2009 1:41 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [MTT users] MTT trivial tests fails to completeon
</span><br>
<span class="quotelev2">&gt; &gt; Centos5.3-x86_64 bit platform with OFED 1.5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you run with --debug (instead of --verbose), and send the
</span><br>
<span class="quotelev2">&gt; &gt; output.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Nov/18/2009 11:08:18AM, Venkat Venkatsubra wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    From: Venkat Venkatsubra
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Sent: Wednesday, November 18, 2009 12:54 PM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    To: 'mtt-users_at_[hidden]'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Subject: MTT trivial tests fails to complete on
</span><br>
Centos5.3-x86_64
<br>
<span class="quotelev2">&gt; &gt; bit
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    platform with OFED 1.5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Hello All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    How do I debug this problem ? Attached are the developer.ini
</span><br>
and
<br>
<span class="quotelev3">&gt; &gt; &gt;    trivial.ini files.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    I can provide any other information that you need.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [root_at_samples]# cat /etc/issue
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    CentOS release 5.3 (Final)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Kernel \r on an \m
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [root_at_samples]# uname -a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Linux 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64
</span><br>
<span class="quotelev2">&gt; &gt; x86_64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    I am running OFED-1.5-20091029-0617 daily build.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Started trivial tests using the following command:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [root_at_samples]# cat developer.ini trivial.ini | ../client/mtt
</span><br>
<span class="quotelev2">&gt; &gt; --verbose -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    ....
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    ....
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** Reporter initialized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** MPI Get phase starting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; MPI Get: [mpi get: my installation]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Checking for new MPI sources...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Using MPI in: /usr/mpi/gcc/openmpi-1.3.2/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** WARNING: alreadyinstalled_mpi_type was not specified,
</span><br>
<span class="quotelev2">&gt; &gt; defaulting to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         &quot;OMPI&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Got new MPI sources: version 1.3.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** MPI Get phase complete
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** MPI Install phase starting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; MPI Install [mpi install: my installation]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Installing MPI: [my installation] / [1.3.2] / [my
</span><br>
<span class="quotelev2">&gt; &gt; installation]...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
<span class="quotelev2">&gt; &gt; htm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       l
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
<span class="quotelev2">&gt; &gt; txt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Completed MPI Install successfully
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** MPI Install phase complete
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** Test Get phase starting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Test Get: [test get: trivial]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Checking for new test sources...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Got new test sources
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** Test Get phase complete
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** Test Build phase starting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Test Build [test build: trivial]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Building for [my installation] / [1.3.2] / [my
</span><br>
installation]
<br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    [trivial]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Completed test build successfully
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** Test Build phase complete
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     *** Test Run phase starting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Test Run [trivial]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;     &gt;&gt; Running with [my installation] / [1.3.2] / [my
</span><br>
installation]
<br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Using MPI Details [open mpi] with MPI Install [my
</span><br>
<span class="quotelev1">&gt; installation]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    During this stage the test stalls.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    After about ~10 minutes the test gets killed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    dmesg on which the test is running displays the following
</span><br>
output:
<br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     ==========
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Dmesg output
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     ==========
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Out of memory: Killed process 5346 (gdmgreeter).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     audispd invoked oom-killer: gfp_mask=0x201d2, order=0,
</span><br>
<span class="quotelev2">&gt; &gt; oomkilladj=0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Call Trace:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff800c39dd&gt;] out_of_memory+0x8e/0x2f5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff8000f2eb&gt;] __alloc_pages+0x245/0x2ce
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff80012a62&gt;] __do_page_cache_readahead+0x95/0x1d9
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff80215932&gt;] sock_readv+0xb7/0xd1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff80088896&gt;] __wake_up_common+0x3e/0x68
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff80013401&gt;] filemap_nopage+0x148/0x322
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff80008863&gt;] __handle_mm_fault+0x1f8/0xe5c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff80066b9a&gt;] do_page_fault+0x4cb/0x830
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      [&lt;ffffffff8005dde9&gt;] error_exit+0x0/0x84
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Thanks!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Venkat
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0709/debug.txt">debug.txt</a>
</ul>
<!-- attachment="debug.txt" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0709/developer.ini">developer.ini</a>
</ul>
<!-- attachment="developer.ini" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests fails tocompleteon	Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<li><strong>Reply:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
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
