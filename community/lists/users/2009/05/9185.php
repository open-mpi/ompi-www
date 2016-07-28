<?
$subject_val = "[OMPI users] How do I compile OpenMPI in Xcode 3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 10:12:57 2009" -->
<!-- isoreceived="20090504141257" -->
<!-- sent="Mon, 4 May 2009 16:12:44 +0200" -->
<!-- isosent="20090504141244" -->
<!-- name="Vicente" -->
<!-- email="vpuibor_at_[hidden]" -->
<!-- subject="[OMPI users] How do I compile OpenMPI in Xcode 3.1" -->
<!-- id="1C2C0085-940F-43BB-910F-975871AE2F09_at_gmail.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI users] How do I compile OpenMPI in Xcode 3.1<br>
<strong>From:</strong> Vicente (<em>vpuibor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 10:12:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9186.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I've seen the FAQ &quot;How do I use Open MPI wrapper compilers in  
<br>
Xcode&quot;, but it's only for MPICC. I am using MPIF90, so I did the same,  
<br>
but changing MPICC for MPIF90, and also the path, but it did not work.
<br>
<p>Building target &#147;fortran&#148; of project &#147;fortran&#148; with configuration  
<br>
&#147;Debug&#148;
<br>
<p><p>Checking Dependencies
<br>
Invalid value 'MPIF90' for GCC_VERSION
<br>
<p><p>The file &quot;MPIF90.cpcompspec&quot; looks like this:
<br>
<p>&nbsp;&nbsp;&nbsp;1 /**
<br>
&nbsp;&nbsp;&nbsp;2         Xcode Coompiler Specification for MPIF90
<br>
&nbsp;&nbsp;&nbsp;3
<br>
&nbsp;&nbsp;&nbsp;4 */
<br>
&nbsp;&nbsp;&nbsp;5
<br>
&nbsp;&nbsp;&nbsp;6 {   Type = Compiler;
<br>
&nbsp;&nbsp;&nbsp;7     Identifier = com.apple.compilers.mpif90;
<br>
&nbsp;&nbsp;&nbsp;8     BasedOn = com.apple.compilers.gcc.4_0;
<br>
&nbsp;&nbsp;&nbsp;9     Name = &quot;MPIF90&quot;;
<br>
&nbsp;&nbsp;10     Version = &quot;Default&quot;;
<br>
&nbsp;&nbsp;11     Description = &quot;MPI GNU C/C++ Compiler 4.0&quot;;
<br>
&nbsp;&nbsp;12     ExecPath = &quot;/usr/local/bin/mpif90&quot;;      // This gets  
<br>
converted to the g++ variant automatically
<br>
&nbsp;&nbsp;13     PrecompStyle = pch;
<br>
&nbsp;&nbsp;14 }
<br>
<p>and is located in &quot;/Developer/Library/Xcode/Plug-ins&quot;
<br>
<p>and when I do mpif90 -v on terminal it works well:
<br>
<p>Using built-in specs.
<br>
Target: i386-apple-darwin8.10.1
<br>
Configured with: /tmp/gfortran-20090321/ibin/../gcc/configure -- 
<br>
prefix=/usr/local/gfortran --enable-languages=c,fortran --with-gmp=/ 
<br>
tmp/gfortran-20090321/gfortran_libs --enable-bootstrap
<br>
Thread model: posix
<br>
gcc version 4.4.0 20090321 (experimental) [trunk revision 144983] (GCC)
<br>
<p><p>Any idea??
<br>
<p>Thanks.
<br>
<p>Vincent
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9185/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9186.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
