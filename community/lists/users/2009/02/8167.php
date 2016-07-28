<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 rpm build error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 16:44:47 2009" -->
<!-- isoreceived="20090223214447" -->
<!-- sent="Mon, 23 Feb 2009 13:44:42 -0800" -->
<!-- isosent="20090223214442" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 rpm build error" -->
<!-- id="df8c8a6d0902231344i23f0c6d1v3a543f564b2cfc37_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E5E5977C-9C31-49E3-884F-04428CAC28D8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 rpm build error<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 16:44:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8166.php">Eugene Loh: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>In reply to:</strong> <a href="8147.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't had time to do the openmpi build from the nightly yet, but
<br>
my user has run some more tests and now has a simple program and
<br>
algorithm to &quot;break&quot; openmpi.  His notes:
<br>
<p>hey, just fyi, I can reproduce the error readily in a simple test case
<br>
my &quot;way to break mpi&quot; is as follows: Master proc runs MPI_Send 1000
<br>
times to each child, then waits for a &quot;I got it&quot; ack from each child.
<br>
Each child receives 1000 numbers from the Master, then sends &quot;I got
<br>
it&quot; to the master
<br>
running this on 25 nodes causes it to break about 60% of the time
<br>
interestingly, it usually breaks on the same process number each time
<br>
<p>ah. It looks like if I let it sit for about 5 minutes, sometimes it
<br>
will work. From my log
<br>
rank: 23 Mon Feb 23 13:29:44 2009 recieved 816
<br>
rank: 23 Mon Feb 23 13:29:44 2009 recieved 817
<br>
rank: 23 Mon Feb 23 13:29:44 2009 recieved 818
<br>
rank: 23 Mon Feb 23 13:33:08 2009 recieved 819
<br>
rank: 23 Mon Feb 23 13:33:08 2009 recieved 820
<br>
<p>Any thoughts on this problem?
<br>
(this is the only reason I'm currently working on upgrading openmpi)
<br>
<p>--Jim
<br>
<p>On Fri, Feb 20, 2009 at 1:59 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; There won't be an official SRPM until 1.3.1 is released.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But to test if 1.3.1 is on-track to deliver a proper solution to you, can
</span><br>
<span class="quotelev1">&gt; you try a nightly tarball, perhaps in conjunction with our &quot;buildrpm.sh&quot;
</span><br>
<span class="quotelev1">&gt; script?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/buildrpm.sh">https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/buildrpm.sh</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should build a trivial SRPM for you from the tarball.  You'll likely need
</span><br>
<span class="quotelev1">&gt; to get the specfile, too, and put it in the same dir as buildrpm.sh.  The
</span><br>
<span class="quotelev1">&gt; specfile is in the same SVN directory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/openmpi.spec">https://svn.open-mpi.org/source/xref/ompi_1.3/contrib/dist/linux/openmpi.spec</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2009, at 3:51 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As long as I can still build the rpm for it and install it via rpm.
</span><br>
<span class="quotelev2">&gt;&gt; I'm running it on a ROCKS cluster, so it needs to be an RPM to get
</span><br>
<span class="quotelev2">&gt;&gt; pushed out to the compute nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Jim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 20, 2009 at 11:30 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 20, 2009, at 2:20 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just went to www.open-mpi.org, went to download, then source rpm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looks like it was actually 1.3-1.  Here's the src.rpm that I pulled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm">http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, gotcha.  Yes, that's 1.3.0, SRPM version 1.  We didn't make up this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nomenclature.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason for this upgrade is it seems a user found some bug that may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be in the OpenMPI code that results in occasionally an MPI_Send()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message getting lost.  He's managed to reproduce it multiple times,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and we can't find anything in his code that can cause it...He's got
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logs of mpi_send() going out, but the matching mpi_receive() never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; getting anything, thus killing his code.  We're currently running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2.8 with ofed support (Haven't tried turning off ofed, etc. yet).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok.  1.3.x is much mo' betta' then 1.2 in many ways.  We could probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; track down the problem, but if you're willing to upgrade to 1.3.x, it'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hopefully just make the problem go away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try a 1.3.1 nightly tarball?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8166.php">Eugene Loh: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>In reply to:</strong> <a href="8147.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
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
