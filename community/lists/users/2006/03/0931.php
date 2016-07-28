<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 29 17:12:11 2006" -->
<!-- isoreceived="20060329221211" -->
<!-- sent="Wed, 29 Mar 2006 15:11:54 -0700" -->
<!-- isosent="20060329221154" -->
<!-- name="Jeffrey Fox" -->
<!-- email="jfox_at_[hidden]" -->
<!-- subject="[OMPI users] sed :36: unescaped newline in pattern substitution" -->
<!-- id="44270163-1D14-4E03-8553-DCA46713018D_at_euclid.colorado.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeffrey Fox (<em>jfox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-29 17:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Previous message:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0937.php">Brian Barrett: "Re: [OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<li><strong>Reply:</strong> <a href="0937.php">Brian Barrett: "Re: [OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried building openmpi on two different powerbooks, a titanium G4 
<br>
(800mhz) and an aluminum G4 (1.6ghz) both running Mac OS X 10.4.5 and  
<br>
Xcode 2.2. The sed error ONLY occurs if I try and build the Fortran  
<br>
90 bindings ( yes I do need them).
<br>
I am using Absoft 8.0 with service pack 6.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the mailing list I saw that someone else solved this problem by  
<br>
rebooting the machine, so I tried it on both machines. No luck.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I set  F77=&quot;/Applications/Absoft/bin/f77 -f -N15&quot; and
<br>
FC=&quot;/Applications/Absoft/bin/f95  -YEXT_NAMES=LCS -YEXT_SFX=_&quot;
<br>
While I don't see how this could be the problem, if I don't include  
<br>
the flags with the name of the compiler,
<br>
the FFLAGS get passed to both the f77 and the f95 compiler and the  
<br>
FCFLAGS are ignored.
<br>
<p>. 
<br>


<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0931/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0931/outfile.txt.gz">outfile.txt.gz</a>
</ul>
<!-- attachment="outfile.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Previous message:</strong> <a href="0930.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0937.php">Brian Barrett: "Re: [OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<li><strong>Reply:</strong> <a href="0937.php">Brian Barrett: "Re: [OMPI users] sed :36: unescaped newline in pattern substitution"</a>
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
