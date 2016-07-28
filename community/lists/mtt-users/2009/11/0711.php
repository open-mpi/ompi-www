<?
$subject_val = "Re: [MTT users] MTT trivial tests failstocomplete";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 17:33:37 2009" -->
<!-- isoreceived="20091120223337" -->
<!-- sent="Fri, 20 Nov 2009 14:35:43 -0800" -->
<!-- isosent="20091120223543" -->
<!-- name="Venkat Venkatsubra" -->
<!-- email="venkat_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT trivial tests failstocomplete" -->
<!-- id="8A71B368A89016469F72CD08050AD33406D9D3CB_at_maui.asicdesigners.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091120154428.GL53339_at_sun.com" -->
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
<strong>Date:</strong> 2009-11-20 17:35:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/12/0712.php">Jeff Squyres: "[MTT users] Voltaire/Google results"</a>
<li><strong>Previous message:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<li><strong>In reply to:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ethan,
<br>
<p>With the latest developer.ini the hang is gone.
<br>
Thank you for the help.
<br>
<p>Venkat
<br>
<p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
<br>
Sent: Friday, November 20, 2009 9:44 AM
<br>
To: General user list for the MPI Testing Tool
<br>
Cc: Divya Manjunath
<br>
Subject: Re: [MTT users] MTT trivial tests failstocomplete
<br>
<p>On Thu, Nov/19/2009 02:05:06PM, Venkat Venkatsubra wrote:
<br>
<span class="quotelev1">&gt; Hi Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; I now started with a clean developer.ini and made only the following
</span><br>
<span class="quotelev1">&gt; change and reran.
</span><br>
<span class="quotelev1">&gt; # Fill this field in
</span><br>
<span class="quotelev1">&gt; hostlist = 102.77.77.63
</span><br>
<span class="quotelev1">&gt; hostlist_max_np = 1
</span><br>
<span class="quotelev1">&gt; max_np = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't hang like it used to before. I get the below error.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mtt submit_group_results
</span><br>
<span class="quotelev1">&gt; Value returning:
</span><br>
<span class="quotelev1">&gt; Returining reference to an array of a single scalar
</span><br>
<span class="quotelev1">&gt; *** ERROR: Could not evaluate: $ret =
</span><br>
<span class="quotelev1">&gt;
</span><br>
MTT::Values::Functions::if(MTT::Values::Functions::have_hostfile(),
<br>
<span class="quotelev1">&gt;             MTT::Values::Functions::join(&quot;--hostfile &quot;,
</span><br>
<span class="quotelev1">&gt;     MTT::Values::Functions::hostfile()),
</span><br>
<span class="quotelev1">&gt;             MTT::Values::Functions::if(
</span><br>
<span class="quotelev1">&gt;                 MTT::Values::Functions::have_hostlist(),
</span><br>
<span class="quotelev1">&gt;                 MTT::Values::Functions::join(&quot;--host &quot;,
</span><br>
<span class="quotelev1">&gt;     MTT::Values::Functions::hostlist()),
</span><br>
<span class="quotelev1">&gt;                 &quot;&quot;
</span><br>
<span class="quotelev1">&gt;             )
</span><br>
<span class="quotelev1">&gt;         );: Undefined subroutine &amp;MTT::Values::Functions::join called
</span><br>
at
<br>
<span class="quotelev1">&gt;     (eval 65) line 1, &lt;SHELL&gt; line 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What should be the next developer.ini change that I should be making ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The complete output and the developer.ini attached.
</span><br>
<p>Oops. &amp;join() should be &amp;stringify().
<br>
<p>&quot;svn up&quot; and try again.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt; Sent: Thursday, November 19, 2009 11:32 AM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Cc: Divya Manjunath
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] MTT trivial tests failstocompleteon
</span><br>
<span class="quotelev1">&gt; Centos5.3-x86_64 bit platform with OFED 1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov/19/2009 08:53:12AM, Venkat Venkatsubra wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ethan,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, we are using <a href="http://svn.open-mpi.org/svn/mtt/trunk">http://svn.open-mpi.org/svn/mtt/trunk</a>.
</span><br>
<span class="quotelev2">&gt; &gt; After &quot;svn update&quot; when I rerun this is what the screen output looks
</span><br>
<span class="quotelev2">&gt; &gt; like.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev2">&gt; &gt; *** MTT: ../client/mtt --debug -
</span><br>
<span class="quotelev2">&gt; &gt; *** Running on mughal
</span><br>
<span class="quotelev2">&gt; &gt; Chdir ../client
</span><br>
<span class="quotelev2">&gt; &gt; Chdir /root/mtt-svn/samples
</span><br>
<span class="quotelev2">&gt; &gt; Copying: stdin to /tmp/XzxTdnyg85.ini
</span><br>
<span class="quotelev2">&gt; &gt; Expanding include_file(s) parameters in /tmp/XzxTdnyg85.ini
</span><br>
<span class="quotelev2">&gt; &gt; Reading ini file: stdin
</span><br>
<span class="quotelev2">&gt; &gt; *** ERROR: Syntax error in stdin: Line 36 in file
</span><br>
/tmp/UqPeD61ett.ini
<br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt;     mal-formed:
</span><br>
<span class="quotelev2">&gt; &gt;             &lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
</span><br>
<span class="quotelev2">&gt; &gt;     Line 41 in file /tmp/UqPeD61ett.ini is mal-formed:
</span><br>
<span class="quotelev2">&gt; &gt;             =======
</span><br>
<span class="quotelev2">&gt; &gt;     Line 53 in file /tmp/UqPeD61ett.ini is mal-formed:
</span><br>
<span class="quotelev1">&gt; &gt;             &gt;&gt;&gt;&gt;&gt;&gt;&gt; .r1337 at /root/mtt-svn/lib/MTT/Messages.pm line
</span><br>
<span class="quotelev2">&gt; &gt; 121.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have some SVN conflicts in your samples/developer.ini file.
</span><br>
<span class="quotelev1">&gt; Do you have your own local changes to that file, e.g., near the
</span><br>
<span class="quotelev1">&gt; &quot;hosts&quot; parameter? I think you just want to resolve those with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ svn resolve --accept=theirs-conflict samples/developer.ini
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Attached are the new developer.ini and the /tmp/UqPeD61ett.ini
</span><br>
files.
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Venkat
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, November 19, 2009 8:36 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [MTT users] MTT trivial tests fails tocompleteon
</span><br>
<span class="quotelev2">&gt; &gt; Centos5.3-x86_64 bit platform with OFED 1.5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Nov/18/2009 12:17:24PM, Venkat Venkatsubra wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Attached.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That developer.ini file is out-of-date. Can you &quot;svn update&quot;, and
</span><br>
try
<br>
<span class="quotelev2">&gt; &gt; to run again? I assume the SVN URL you're using is
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://svn.open-mpi.org/svn/mtt/trunk">http://svn.open-mpi.org/svn/mtt/trunk</a>?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Wednesday, November 18, 2009 1:41 PM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [MTT users] MTT trivial tests fails to completeon
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Centos5.3-x86_64 bit platform with OFED 1.5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could you run with --debug (instead of --verbose), and send the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; output.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ethan
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, Nov/18/2009 11:08:18AM, Venkat Venkatsubra wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    From: Venkat Venkatsubra
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Sent: Wednesday, November 18, 2009 12:54 PM
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    To: 'mtt-users_at_[hidden]'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Subject: MTT trivial tests fails to complete on
</span><br>
<span class="quotelev1">&gt; Centos5.3-x86_64
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bit
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    platform with OFED 1.5
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Hello All,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    How do I debug this problem ? Attached are the developer.ini
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    trivial.ini files.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    I can provide any other information that you need.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [root_at_samples]# cat /etc/issue
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    CentOS release 5.3 (Final)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Kernel \r on an \m
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [root_at_samples]# uname -a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Linux 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009
</span><br>
x86_64
<br>
<span class="quotelev3">&gt; &gt; &gt; x86_64
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    I am running OFED-1.5-20091029-0617 daily build.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Started trivial tests using the following command:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [root_at_samples]# cat developer.ini trivial.ini | ../client/mtt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --verbose -
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    ....
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    ....
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** Reporter initialized
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** MPI Get phase starting
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; MPI Get: [mpi get: my installation]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Checking for new MPI sources...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Using MPI in: /usr/mpi/gcc/openmpi-1.3.2/
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** WARNING: alreadyinstalled_mpi_type was not specified,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; defaulting to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         &quot;OMPI&quot;.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Got new MPI sources: version 1.3.2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** MPI Get phase complete
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** MPI Install phase starting
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; MPI Install [mpi install: my installation]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Installing MPI: [my installation] / [1.3.2] / [my
</span><br>
<span class="quotelev3">&gt; &gt; &gt; installation]...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
<span class="quotelev3">&gt; &gt; &gt; htm
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       l
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
<span class="quotelev3">&gt; &gt; &gt; txt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Completed MPI Install successfully
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** MPI Install phase complete
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** Test Get phase starting
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Test Get: [test get: trivial]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Checking for new test sources...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Got new test sources
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** Test Get phase complete
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** Test Build phase starting
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Test Build [test build: trivial]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Building for [my installation] / [1.3.2] / [my
</span><br>
<span class="quotelev1">&gt; installation]
</span><br>
<span class="quotelev2">&gt; &gt; /
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    [trivial]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
/root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Reported to text file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Completed test build successfully
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** Test Build phase complete
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     *** Test Run phase starting
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Test Run [trivial]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;     &gt;&gt; Running with [my installation] / [1.3.2] / [my
</span><br>
<span class="quotelev1">&gt; installation]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        Using MPI Details [open mpi] with MPI Install [my
</span><br>
<span class="quotelev2">&gt; &gt; installation]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    During this stage the test stalls.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    After about ~10 minutes the test gets killed.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    dmesg on which the test is running displays the following
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     ==========
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     Dmesg output
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     ==========
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     Out of memory: Killed process 5346 (gdmgreeter).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     audispd invoked oom-killer: gfp_mask=0x201d2, order=0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; oomkilladj=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     Call Trace:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff800c39dd&gt;] out_of_memory+0x8e/0x2f5
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff8000f2eb&gt;] __alloc_pages+0x245/0x2ce
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff80012a62&gt;] __do_page_cache_readahead+0x95/0x1d9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff80215932&gt;] sock_readv+0xb7/0xd1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff80088896&gt;] __wake_up_common+0x3e/0x68
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff80013401&gt;] filemap_nopage+0x148/0x322
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff80008863&gt;] __handle_mm_fault+0x1f8/0xe5c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff80066b9a&gt;] do_page_fault+0x4cb/0x830
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      [&lt;ffffffff8005dde9&gt;] error_exit+0x0/0x84
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Thanks!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    Venkat
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
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
<p>Content-Description: debug.txt
<br>
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
<span class="quotelev1">&gt; Copying: stdin to /tmp/KoKwARma6P.ini
</span><br>
<span class="quotelev1">&gt; Expanding include_file(s) parameters in /tmp/KoKwARma6P.ini
</span><br>
<span class="quotelev1">&gt; Reading ini file: stdin
</span><br>
<span class="quotelev1">&gt; Validating INI inifile: /tmp/Xof1fEUuwm.ini
</span><br>
<span class="quotelev1">&gt; FilterINI: Final list of sections:
</span><br>
<span class="quotelev1">&gt;        [mtt]
</span><br>
<span class="quotelev1">&gt;        [mpi details: open mpi]
</span><br>
<span class="quotelev1">&gt;        [mpi get: my installation]
</span><br>
<span class="quotelev1">&gt;        [mpi install: my installation]
</span><br>
<span class="quotelev1">&gt;        [reporter: text file backup]
</span><br>
<span class="quotelev1">&gt;        [test get: trivial]
</span><br>
<span class="quotelev1">&gt;        [test build: trivial]
</span><br>
<span class="quotelev1">&gt;        [test run: trivial]
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT scratch
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; scratch: .
</span><br>
<span class="quotelev1">&gt; scratch resolved: /root/mtt-svn/samples
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT fast_scratch
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; fast_scratch: /root/mtt-svn/samples
</span><br>
<span class="quotelev1">&gt; fast_scratch resolved: /root/mtt-svn/samples
</span><br>
<span class="quotelev1">&gt; *** Main scratch tree: /root/mtt-svn/samples
</span><br>
<span class="quotelev1">&gt; *** Fast scratch tree: /root/mtt-svn/samples
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT force
</span><br>
<span class="quotelev1">&gt; Value returning: 1
</span><br>
<span class="quotelev1">&gt; Making dir: /root/mtt-svn/samples/sources (cwd: /root/mtt-svn/samples)
</span><br>
<span class="quotelev1">&gt; Making dir: /root/mtt-svn/samples/installs (cwd:
</span><br>
/root/mtt-svn/samples)
<br>
<span class="quotelev1">&gt; Making dir: /root/mtt-svn/samples/test_runs (cwd:
</span><br>
/root/mtt-svn/samples)
<br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT funclet_files
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT hostfile
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT hostlist
</span><br>
<span class="quotelev1">&gt; Value returning: 102.77.77.63
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Got default hostlist: 102.77.77.63, max_np: 1
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT max_np
</span><br>
<span class="quotelev1">&gt; Value returning: 1
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT textwrap
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT drain_timeout
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT trim_save_successful
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT trim_save_failed
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT trial
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT http_proxy
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT https_proxy
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT ftp_proxy
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT terminate_files
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT pause_files
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT min_disk_free
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT min_disk_free_wait
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT delete_fast_scratch
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
save_fast_scratch_files
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
<span class="quotelev1">&gt;    docommand_timeout_notify_file
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
<span class="quotelev1">&gt;    docommand_timeout_notify_email
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
<span class="quotelev1">&gt;    docommand_timeout_notify_timeout
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
<span class="quotelev1">&gt;    docommand_timeout_backtrace_program
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT before_all_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
before_all_exec_timeout
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT before_all_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT before_each_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
before_each_exec_timeout
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT before_each_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT after_all_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
after_all_exec_timeout
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT after_all_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT after_each_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT
</span><br>
after_each_exec_timeout
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) MTT after_each_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mtt log_file logfile
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; *** Reporter initializing
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    module
</span><br>
<span class="quotelev1">&gt; Value returning: TextFile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Init(@args)
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    textfile_summary_header
</span><br>
<span class="quotelev1">&gt; Value returning: hostname: mughal
</span><br>
<span class="quotelev1">&gt;    uname: Linux mughal 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST
</span><br>
2009
<br>
<span class="quotelev1">&gt;    x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;    who am i: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    textfile_summary_footer
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    textfile_detail_header 
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    textfile_detail_footer 
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    textfile_textwrap
</span><br>
<span class="quotelev1">&gt; Value returning: 78
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    textfile_filename
</span><br>
<span class="quotelev1">&gt; Value returning: $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    textfile_dirname
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Making dir: /root/mtt-svn/samples (cwd: /root/mtt-svn/samples)
</span><br>
<span class="quotelev1">&gt; File reporter initialized
</span><br>
<span class="quotelev1">&gt;    (/root/mtt-svn/samples/$phase-$section-$mpi_name-$mpi_version.txt)
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    email_to
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; *** Reporter initialized
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** MPI Get phase starting
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/sources
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI Get: [mpi get: my installation]
</span><br>
<span class="quotelev1">&gt;    Checking for new MPI sources...
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    module
</span><br>
<span class="quotelev1">&gt; Value returning: AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    mpi_details
</span><br>
<span class="quotelev1">&gt; Value returning: Open MPI
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    skip_section
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    env_module
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    env_importer
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    setenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    unsetenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    prepend_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    append_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/sources
</span><br>
<span class="quotelev1">&gt; Making dir: mpi_get__my_installation (cwd:
</span><br>
/root/mtt-svn/samples/sources)
<br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/sources/mpi_get__my_installation
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::MPI::Get::AlreadyInstalled::Get(@args)
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    alreadyinstalled_dir
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT::FindProgram::FindProgram returning
</span><br>
<span class="quotelev1">&gt;    /usr/mpi/gcc/openmpi-1.3.2/bin/mpicc
</span><br>
<span class="quotelev1">&gt;    Using MPI in: /usr/mpi/gcc/openmpi-1.3.2/
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    alreadyinstalled_mpi_type
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; *** WARNING: alreadyinstalled_mpi_type was not specified, defaulting
</span><br>
to
<br>
<span class="quotelev1">&gt;     &quot;OMPI&quot;.
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi get: my installation
</span><br>
<span class="quotelev1">&gt;    alreadyinstalled_version
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT::Values::Functions::MPI::OMPI::get_version returning 1.3.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT::MPI::Get::AlreadyInstalled complete
</span><br>
<span class="quotelev1">&gt;    Got new MPI sources: version 1.3.2
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** MPI Get phase complete
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** MPI Install phase starting
</span><br>
<span class="quotelev1">&gt; Making dir: /root/mtt-svn/samples/mpi-install (cwd:
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/sources/mpi_get__my_installation)
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI Install [mpi install: my installation]
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    mpi_get
</span><br>
<span class="quotelev1">&gt; Value returning: My Installation
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Checking for [my installation] / [1.3.2] / [my installation]
</span><br>
<span class="quotelev1">&gt;    Installing MPI: [my installation] / [1.3.2] / [my installation]...
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Unique directory: qwaS
</span><br>
<span class="quotelev1">&gt; Making dir: qwaS (cwd: /root/mtt-svn/samples/installs)
</span><br>
<span class="quotelev1">&gt; qwaS does not exist -- creating
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/mpi-install
</span><br>
<span class="quotelev1">&gt; Unique directory: KxDq
</span><br>
<span class="quotelev1">&gt; Making dir: KxDq (cwd: /root/mtt-svn/samples/mpi-install)
</span><br>
<span class="quotelev1">&gt; KxDq does not exist -- creating
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/mpi-install/KxDq
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    skip_section
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    module
</span><br>
<span class="quotelev1">&gt; Value returning: Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    description
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) MTT description
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Pushdir to /root/mtt-svn/samples/installs/qwaS
</span><br>
<span class="quotelev1">&gt; Chdir ..
</span><br>
<span class="quotelev1">&gt; Chdir my_installation--my_installation--1.3.2
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf /root/mtt-svn/samples/installs/CGi7
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Sym linked: qwaS to my_installation--my_installation--1.3.2
</span><br>
<span class="quotelev1">&gt; Popdir to /root/mtt-svn/samples/mpi-install/KxDq
</span><br>
<span class="quotelev1">&gt; Pushdir to /root/mtt-svn/samples/mpi-install/KxDq
</span><br>
<span class="quotelev1">&gt; Chdir ..
</span><br>
<span class="quotelev1">&gt; Chdir my_installation--my_installation--1.3.2
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/mpi-install
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf /root/mtt-svn/samples/mpi-install/Aya9
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Sym linked: KxDq to my_installation--my_installation--1.3.2
</span><br>
<span class="quotelev1">&gt; Popdir to /root/mtt-svn/samples/mpi-install/KxDq
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    env_module
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    env_importer
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    setenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    unsetenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    prepend_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    append_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    configure_arguments
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    vpath_mode
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    make_all_arguments
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    make_check
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    compiler_name
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    compiler_version
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    mpi_details
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    save_stdout_on_success
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    merge_stdout_stderr
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    stderr_save_lines
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    stdout_save_lines
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    restart_on_pattern
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/mpi-install/KxDq
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf src
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Making dir: src (cwd: /root/mtt-svn/samples/mpi-install/KxDq)
</span><br>
<span class="quotelev1">&gt; src does not exist -- creating
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/mpi-install/KxDq/src
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret =
</span><br>
<span class="quotelev1">&gt;    &amp;MTT::MPI::Get::AlreadyInstalled::PrepareForInstall(@args)
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/mpi-install/KxDq/src
</span><br>
<span class="quotelev1">&gt; Making dir: /root/mtt-svn/samples/installs/qwaS/install (cwd:
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/mpi-install/KxDq/src)
</span><br>
<span class="quotelev1">&gt; /root/mtt-svn/samples/installs/qwaS/install does not exist -- creating
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Install::Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::MPI::Install::Analyze::OMPI::Install(@args)
</span><br>
<span class="quotelev1">&gt; Have C bindings: 1
</span><br>
<span class="quotelev1">&gt; Have C++ bindings: 1
</span><br>
<span class="quotelev1">&gt; Have F77 bindings: 1
</span><br>
<span class="quotelev1">&gt; Have F90 bindings: 1
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    mpi_bitness bitness
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi install: my
</span><br>
installation
<br>
<span class="quotelev1">&gt;    endian
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Scanning fast scratch for files to save:
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/mpi-install/KxDq (config.log)
</span><br>
<span class="quotelev1">&gt; Saving files from fast scratch to persistent scratch...
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    skip_mpi_get
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    skip_mpi_install
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    setenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    unsetenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    prepend_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    append_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; _get_filename returning
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
tx
<br>
<span class="quotelev1">&gt;    t
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
ht
<br>
<span class="quotelev1">&gt;    ml
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
htm
<br>
<span class="quotelev1">&gt;   l
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
tx
<br>
<span class="quotelev1">&gt;    t
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
txt
<br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
/root/mtt-svn/samples/MPI_Install-my_installation-my_installation-1.3.2.
<br>
ht
<br>
<span class="quotelev1">&gt;    ml
</span><br>
<span class="quotelev1">&gt;    Completed MPI Install successfully
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** MPI Install phase complete
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** Test Get phase starting
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/sources
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test Get: [test get: trivial]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test get: trivial module
</span><br>
<span class="quotelev1">&gt; Value returning: Trivial
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test get: trivial
</span><br>
skip_section
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test get: trivial setenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test get: trivial
</span><br>
unsetenv
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test get: trivial
</span><br>
prepend_path
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test get: trivial
</span><br>
append_path
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__trivial (cwd: /root/mtt-svn/samples/sources)
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/sources/test_get__trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::Trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::Trivial::Get(@args)
</span><br>
<span class="quotelev1">&gt; Getting Trivial
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** Test Get phase complete
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** Test Build phase starting
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test Build [test build: trivial]
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
test_get
<br>
<span class="quotelev1">&gt; Value returning: trivial
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    skip_mpi_get
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    skip_mpi_install
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt;    Building for [my installation] / [1.3.2] / [my installation] /
</span><br>
[trivial]
<br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs/qwaS
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    skip_section
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
module
<br>
<span class="quotelev1">&gt; Value returning: Trivial
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd: /root/mtt-svn/samples/installs/qwaS)
</span><br>
<span class="quotelev1">&gt; tests does not exist -- creating
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs/qwaS/tests
</span><br>
<span class="quotelev1">&gt; Making dir: trivial (cwd: /root/mtt-svn/samples/installs/qwaS/tests)
</span><br>
<span class="quotelev1">&gt; trivial does not exist -- creating
</span><br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs/qwaS/tests/trivial
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    description
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) MTT description
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    test_bitness bitness
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree copying to
</span><br>
/root/mtt-svn/samples/installs/qwaS/tests/trivial
<br>
<span class="quotelev1">&gt; Chdir /root/mtt-svn/samples/installs/qwaS/tests/trivial
</span><br>
<span class="quotelev1">&gt; Copying directory: /root/mtt-svn/samples/sources/test_get__trivial
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf test_get__trivial
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: cp -r /root/mtt-svn/samples/sources/test_get__trivial
</span><br>
.
<br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Chdir test_get__trivial
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    save_stdout_on_success
</span><br>
<span class="quotelev1">&gt; Value returning: 1
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    merge_stdout_stderr
</span><br>
<span class="quotelev1">&gt; Value returning: 1
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    stderr_save_lines
</span><br>
<span class="quotelev1">&gt; Value returning: 100
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    stdout_save_lines
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
env_module
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    env_importer
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
setenv
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
unsetenv
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    prepend_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    append_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Build::Trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Build::Trivial::Build(@args)
</span><br>
<span class="quotelev1">&gt; Building Trivial
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    trivial_tests_cflags
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    trivial_tests_fflags
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    trivial_tests_languages
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    trivial_tests_mpicc
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    trivial_tests_mpicxx
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    trivial_tests_mpif77
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test build: trivial
</span><br>
<span class="quotelev1">&gt;    trivial_tests_mpif90
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Test compile/link sample C MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpicc	hello.c -o c_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpicc	ring.c -o c_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Test compile/link sample C++ MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpicxx  hello.cc -o cxx_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpicxx  ring.cc -o cxx_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Test compile/link sample F77 MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpif77  hello.f -o f77_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpif77  ring.f -o f77_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Test compile/link sample F90 MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpif90  hello.f90 -o f90_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpif90  ring.f90 -o f90_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    skip_mpi_get
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    skip_mpi_install
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    setenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    unsetenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    prepend_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef23540) reporter: text file
</span><br>
backup
<br>
<span class="quotelev1">&gt;    append_path
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; _get_filename returning
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;   /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;   /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.txt
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /root/mtt-svn/samples/Test_Build-trivial-my_installation-1.3.2.html
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** Test Build phase complete
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; *** Test Run phase starting
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test Run [trivial]
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
test_build
<br>
<span class="quotelev1">&gt; Value returning: trivial
</span><br>
<span class="quotelev1">&gt; Global min free specified as: 5%, resolved as 2539267072
</span><br>
<span class="quotelev1">&gt; Found a match! trivial [trivial
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
skip_mpi_get
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
<span class="quotelev1">&gt;    skip_mpi_install
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
skip_section
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
<span class="quotelev1">&gt;    specify_module
</span><br>
<span class="quotelev1">&gt; Value returning: Simple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Running with [my installation] / [1.3.2] / [my installation]
</span><br>
<span class="quotelev1">&gt; Found mpi_details [open mpi] in MPI get [my installation]
</span><br>
<span class="quotelev1">&gt; Found MPI details: [open mpi]
</span><br>
<span class="quotelev1">&gt;    Using MPI Details [open mpi] with MPI Install [my installation]
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
<span class="quotelev1">&gt;    mpi_details_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Got final exec: mpirun	   &amp;if(
</span><br>
<span class="quotelev1">&gt; 	   &amp;have_hostfile(),
</span><br>
<span class="quotelev1">&gt; 	   &amp;join(&quot;--hostfile &quot;, &amp;hostfile()),
</span><br>
<span class="quotelev1">&gt; 	   &amp;if(
</span><br>
<span class="quotelev1">&gt; 	       &amp;have_hostlist(),
</span><br>
<span class="quotelev1">&gt; 	       &amp;join(&quot;--host &quot;, &amp;hostlist()),
</span><br>
<span class="quotelev1">&gt; 	       &quot;&quot;
</span><br>
<span class="quotelev1">&gt; 	   )
</span><br>
<span class="quotelev1">&gt;        ) -np &amp;test_np() --prefix &amp;test_prefix() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt;    &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; Chdir
</span><br>
/root/mtt-svn/samples/installs/qwaS/tests/trivial/test_get__trivial
<br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
env_module
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
env_importer
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial setenv
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
unsetenv
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
prepend_path
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
append_path
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
description
<br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) MTT description
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    before_any_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    before_any_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Time 10 = 10 seconds
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    before_any_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    before_each_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    before_each_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Time  seconds
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    before_each_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    after_each_exec
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    after_each_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Time 10 = 10 seconds
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    after_each_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    after_all_exec
</span><br>
<span class="quotelev1">&gt; Value returning: done.
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    after_all_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Time 10 = 10 seconds
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mpi details: open mpi
</span><br>
<span class="quotelev1">&gt;    after_all_exec_pass
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Specify::Simple::Specify(@args)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./cxx_ring (group: only)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./f77_hello (group: only)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./f90_hello (group: only)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./c_hello (group: only)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./f90_ring (group: only)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./f77_ring (group: only)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./c_ring (group: only)
</span><br>
<span class="quotelev1">&gt;    Adding test: ./cxx_hello (group: only)
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) test run: trivial
</span><br>
<span class="quotelev1">&gt;    analyze_module
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0x1ef499a0) mtt submit_group_results
</span><br>
<span class="quotelev1">&gt; Value returning: 
</span><br>
<span class="quotelev1">&gt; Returining reference to an array of a single scalar
</span><br>
<span class="quotelev1">&gt; *** ERROR: Could not evaluate: $ret =
</span><br>
<span class="quotelev1">&gt;
</span><br>
MTT::Values::Functions::if(MTT::Values::Functions::have_hostfile(), 
<br>
<span class="quotelev1">&gt; 	    MTT::Values::Functions::join(&quot;--hostfile &quot;,
</span><br>
<span class="quotelev1">&gt;     MTT::Values::Functions::hostfile()), 
</span><br>
<span class="quotelev1">&gt; 	    MTT::Values::Functions::if(
</span><br>
<span class="quotelev1">&gt; 		MTT::Values::Functions::have_hostlist(),
</span><br>
<span class="quotelev1">&gt; 		MTT::Values::Functions::join(&quot;--host &quot;,
</span><br>
<span class="quotelev1">&gt;     MTT::Values::Functions::hostlist()),
</span><br>
<span class="quotelev1">&gt; 		&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 	    )
</span><br>
<span class="quotelev1">&gt; 	);: Undefined subroutine &amp;MTT::Values::Functions::join called at
</span><br>
<span class="quotelev1">&gt;     (eval 65) line 1, &lt;SHELL&gt; line 3.
</span><br>
<p><p><span class="quotelev1">&gt; _______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/12/0712.php">Jeff Squyres: "[MTT users] Voltaire/Google results"</a>
<li><strong>Previous message:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<li><strong>In reply to:</strong> <a href="0710.php">Ethan Mallove: "Re: [MTT users] MTT trivial tests failstocomplete"</a>
<!-- nextthread="start" -->
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
