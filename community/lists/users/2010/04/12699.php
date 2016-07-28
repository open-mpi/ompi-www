<?
$subject_val = "Re: [OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 12:11:36 2010" -->
<!-- isoreceived="20100419161136" -->
<!-- sent="Mon, 19 Apr 2010 11:11:27 -0500" -->
<!-- isosent="20100419161127" -->
<!-- name="Paul Cizmas" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="FCF674AC-4858-4A93-B511-876B45873A53_at_mac.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C774B272-300F-4EAD-B0C9-4C186A405078_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OS X - Can't find the absoft directory<br>
<strong>From:</strong> Paul Cizmas (<em>cizmas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 12:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2010, at 8:45 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 19, 2010, at 9:30 AM, Paul Cizmas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do note that the compile command line is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../../libtool   --mode=compile /Applications/Absoft11.0/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin/f90 -I../../../ompi/include -I../../../ompi/include -p. -I. -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../../ompi/mpi/f90  -m64 -lU77 -c -o mpi.lo mpi.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have your .bashrc configured such that it is run for /bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as well?  (I'm a tcsh user; forgive if this is a dumb question)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know this!!!  How can I check it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat &gt; testme &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; env | grep ABSOFT
</span><br>
<span class="quotelev1">&gt; exit 0
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; $ chmod +x testme
</span><br>
<span class="quotelev1">&gt; $ ./testme
</span><br>
<span class="quotelev1">&gt; ABSOFT=&lt;your value&gt;
</span><br>
<span class="quotelev1">&gt; $ /bin/sh ./testme
</span><br>
<span class="quotelev1">&gt; ABSOFT=&lt;your value&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It does work properly.
<br>
<p><span class="quotelev1">&gt; Confirm that this works.  If it does, try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat &gt; Makefile &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; all:
</span><br>
<span class="quotelev1">&gt; &lt;tab&gt;./testme
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; ./testme
</span><br>
<span class="quotelev1">&gt; ABSOFT=&lt;your value&gt;
</span><br>
<p>It does work properly.
<br>
<p><span class="quotelev1">&gt; Can you see if that works?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does if I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export ABSOFT=foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but not if I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ABSOFT=foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash-3.2$ ABSOFT=foo
</span><br>
<span class="quotelev1">&gt; bash-3.2$ ./testme
</span><br>
<span class="quotelev1">&gt; bash-3.2$ export ABSOFT=foo
</span><br>
<span class="quotelev1">&gt; bash-3.2$ ./testme
</span><br>
<span class="quotelev1">&gt; ABSOFT=foo
</span><br>
<span class="quotelev1">&gt; bash-3.2$
</span><br>
<p>Here there was a difference - it did work for both cases:
<br>
<p>~$ ABSOFT=foo
<br>
~$ testme
<br>
ABSOFT=foo
<br>
~$ export ABSOFT=foo
<br>
~$ testme
<br>
ABSOFT=foo
<br>
~$
<br>
<p>Thank you,
<br>
Paul
<br>
<p><p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
