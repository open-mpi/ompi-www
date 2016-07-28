<?
$subject_val = "Re: [OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 09:45:39 2010" -->
<!-- isoreceived="20100419134539" -->
<!-- sent="Mon, 19 Apr 2010 09:45:35 -0400" -->
<!-- isosent="20100419134535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="C774B272-300F-4EAD-B0C9-4C186A405078_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C6459913-130B-4230-9206-996B892442AC_at_mac.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 09:45:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12697.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12694.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2010, at 9:30 AM, Paul Cizmas wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I do note that the compile command line is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../libtool   --mode=compile /Applications/Absoft11.0/
</span><br>
<span class="quotelev2">&gt; &gt; bin/f90 -I../../../ompi/include -I../../../ompi/include -p. -I. -
</span><br>
<span class="quotelev2">&gt; &gt; I../../../ompi/mpi/f90  -m64 -lU77 -c -o mpi.lo mpi.f90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have your .bashrc configured such that it is run for /bin/sh 
</span><br>
<span class="quotelev2">&gt; &gt; as well?  (I'm a tcsh user; forgive if this is a dumb question)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not know this!!!  How can I check it?
</span><br>
<p>Try this:
<br>
<p>$ cat &gt; testme &lt;&lt;EOF
<br>
#!/bin/sh
<br>
env | grep ABSOFT
<br>
exit 0
<br>
EOF
<br>
$ chmod +x testme
<br>
$ ./testme
<br>
ABSOFT=&lt;your value&gt;
<br>
$ /bin/sh ./testme
<br>
ABSOFT=&lt;your value&gt;
<br>
<p>Confirm that this works.  If it does, try this:
<br>
<p>$ cat &gt; Makefile &lt;&lt;EOF
<br>
all:
<br>
&lt;tab&gt;./testme
<br>
EOF
<br>
$ make
<br>
./testme
<br>
ABSOFT=&lt;your value&gt;
<br>
<p>Can you see if that works?
<br>
<p>It does if I 
<br>
<p>export ABSOFT=foo
<br>
<p>but not if I
<br>
<p>ABSOFT=foo
<br>
<p>For example:
<br>
<p>bash-3.2$ ABSOFT=foo
<br>
bash-3.2$ ./testme 
<br>
bash-3.2$ export ABSOFT=foo
<br>
bash-3.2$ ./testme
<br>
ABSOFT=foo
<br>
bash-3.2$ 
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12697.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12694.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
