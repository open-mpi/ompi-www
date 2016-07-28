<?
$subject_val = "Re: [OMPI users] low CPU utilization with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 06:28:13 2014" -->
<!-- isoreceived="20141024102813" -->
<!-- sent="Fri, 24 Oct 2014 10:28:11 +0000" -->
<!-- isosent="20141024102811" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] low CPU utilization with OpenMPI" -->
<!-- id="6CD77A98-9637-46D2-8970-0FFCD97243C6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvvnSqe-n+Z=swcxaB02zE1gRdLBN0o3bsuG2sTiQLt8eACBA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] low CPU utilization with OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 06:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25569.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25567.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25566.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25565.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
- Is /tmp on that machine on NFS or local?
<br>
<p>- Have you looked at the text of the help message that came out before the &quot;9 more processes have sent help message help-opal-shmem-mmap.txt / mmap on nfs&quot; message?  It should contain details about what the problematic NFS directory is.
<br>
<p>- Do you know that it's MPI that is causing this low CPU utilization?
<br>
<p>- You mentioned other MPI implementations; have you tested with them to see if they get better CPU utilization?
<br>
<p>- What happens if you run this application on a single machine, with no network messaging?
<br>
<p>- Do you know what specifically in your application is slow?  I.e., have you done any instrumentation to see what steps / API calls are running slowly, and then tried to figure out why?
<br>
<p>- Do you have blocking message patterns that might operate well in shared memory, but expose the inefficiencies of its algorithms/design when it moves to higher-latency transports?
<br>
<p>- How long does your application run for?
<br>
<p>I ask these questions because MPI applications tend to be quite complicated. Sometimes it's the application itself that is the cause of slowdown / inefficiencies.
<br>
<p><p><p>On Oct 23, 2014, at 9:29 PM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Later I change another machine and set the TMPDIR to default /tmp, but the problem (low CPU utilization under 20%) still occur :&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 23, 2014 at 10:38 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If normal users can't write to /tmp (or if /tmp is an NFS-mounted filesystem), that's the underlying problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Vinson -- you should probably try to get that fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2014, at 10:35 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's not coming from OSHMEM but from the OPAL &quot;shmem&quot; framework. You are going to get terrible performance - possibly slowing to a crawl having all processes open their backing files for mmap on NSF. I think that's the error that he's getting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Oct 23, 2014 at 6:06 AM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; HI, Thanks for your reply:)
</span><br>
<span class="quotelev2">&gt; &gt; I really run an MPI program (compile with OpenMPI and run with &quot;mpirun -n 8 ......&quot;). My OpenMPI version is 1.8.3 and my program is Gromacs. BTW, what is OSHMEM ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best
</span><br>
<span class="quotelev2">&gt; &gt; Vincent
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Oct 23, 2014 at 12:21 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; From your error message, I gather you are not running an MPI program, but rather an OSHMEM one? Otherwise, I find the message strange as it only would be emitted from an OSHMEM program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What version of OMPI are you trying to use?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 22, 2014, at 7:12 PM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your reply:)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Follow your advice I tried to set the TMPDIR to /var/tmp and /dev/shm and even reset to /tmp (I get the system permission), the problem still occur (CPU utilization still lower than 20%). I have no idea why and ready to give up OpenMPI instead of using other MPI library.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------Old Message-------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Tue, 21 Oct 2014 22:21:31 -0400
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Brock Palen &lt;brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] low CPU utilization with OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message-ID: &lt;CC54135D-0CFE-440A-8DF2-06B587E172D2_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Doing special files on NFS can be weird,  try the other /tmp/ locations:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /var/tmp/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /dev/shm  (ram disk careful!)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt; &gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Oct 21, 2014, at 10:18 PM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Because of permission reason (OpenMPI can not write temporary file to the default /tmp directory), I change the TMPDIR to my local directory (export TMPDIR=/home/user/tmp ) and then the MPI program can run. But the CPU utilization is very low under 20% (8 MPI rank running in Intel Xeon 8-core CPU).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; And I also got some message when I run with OpenMPI:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; [cn3:28072] 9 more processes have sent help message help-opal-shmem-mmap.txt / mmap on nfs
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; [cn3:28072] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Any idea?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; VIncent
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25569.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25567.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25566.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25565.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
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
