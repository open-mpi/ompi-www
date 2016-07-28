<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 01:24:42 2008" -->
<!-- isoreceived="20080425052442" -->
<!-- sent="Fri, 25 Apr 2008 14:24:27 +0900" -->
<!-- isosent="20080425052427" -->
<!-- name="Koun SHIRAI" -->
<!-- email="koun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="C343AD71-500C-48AD-AA91-D6E4A1C8FDFE_at_sanken.osaka-u.ac.jp" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="6B1EBEF0-AE47-4D2B-A7EA-A4ED37DDC03D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] install intel mac with Laopard<br>
<strong>From:</strong> Koun SHIRAI (<em>koun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 01:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5513.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5516.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5516.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for all the people giving me advices.
<br>
<p>I have solved the problem.  As most of them suggested, the problem was  
<br>
incompatibility in the created objects between gcc and ifort.
<br>
I do not have icc, and hence use gcc right now.  In this case, by  
<br>
simply including options
<br>
CFLAGS=-m64 CXXFLAGS=-m64
<br>
in ./configure command, I have succeeded installation.
<br>
<p>casey:mpi koun$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r16989
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.5
<br>
&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Configured architecture: i386-apple-darwin9.2.0
<br>
&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: /usr/bin/gcc-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: /usr/bin/g++-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++-4.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: ifort
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: ifort
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;...
<br>
<p>Then, compilation and execution of a program was succeeded
<br>
<p>casey:mpi koun$ mpif90 hello.f90  -o hello
<br>
<p>casey:mpi koun$ mpirun -np 4  hello
<br>
&nbsp;&nbsp;Hello, world! I am            0  of            4
<br>
&nbsp;&nbsp;Hello, world! I am            2  of            4
<br>
&nbsp;&nbsp;Hello, world! I am            1  of            4
<br>
&nbsp;&nbsp;Hello, world! I am            3  of            4
<br>
<p><p>I understand that it is difficult to fully describe practical  
<br>
notifications for each implementation, because of a lots of OS's and  
<br>
its frequent revisions.  In spite of this difficulty, I am wondering  
<br>
why typical examples for configure are not given in, for example,  
<br>
README or homepage.  In README, concrete names of systems, such as  
<br>
Linux 32bit with gcc or OSX (10.4), are listed for those systems which  
<br>
have been tested.  Hence, at least, for these systems, it is possible  
<br>
to provide concrete form for configure command.  Even these minimum  
<br>
information is very useful for beginners who do not have any idea  
<br>
which options must be used. This would significantly reduce questions  
<br>
like me.
<br>
<p>Best wishes,
<br>
<p><p>-----------------------
<br>
Koun SHIRAI                                                            
<br>
$BGr0f8w1@(B
<br>
Nanoscience and Nanotechnology Center       $B7W;;5!%J%N%^%F%j(B 
<br>
$B%&quot;%k%G%6%$%sJ,Ln(B
<br>
ISIR, Osaka  
<br>
University                                           $B;:6H2J3X(B 
<br>
$B%J%N%F%/%N%m%8!&lt;%;%s%?!&lt;(B
<br>
8-1, Mihogaoka, Ibaraki                                          
<br>
$BBg:eBg3X!&quot;;:6H2J3X8&amp;5f=j(B
<br>
Osaka 567-0047, JAPAN                                      $B0q(B 
<br>
$BLZ;TH~Jf%15V#8!]#1(B
<br>
PH: +81-6-6879-4302
<br>
FAX: +81-6-6879-8539
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5515.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5513.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5516.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5516.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
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
