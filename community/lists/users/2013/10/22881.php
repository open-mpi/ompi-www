<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 21:17:16 2013" -->
<!-- isoreceived="20131031011716" -->
<!-- sent="Thu, 31 Oct 2013 01:17:14 +0000" -->
<!-- isosent="20131031011714" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F99E531_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAEGKUyx-izwfMTgWxkbLD7ZXHeR3R5LVmwZjxjwMwv+0OwPTXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 21:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22882.php">Jim Parker: "[OMPI users] Fwd: Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22880.php">Martin Siegert: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22879.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've compiled your application and seen similar behavior (I snipped one of the writes and abbreviated another):
<br>
<p>-----
<br>
&nbsp;Iam =                     3 received                     8
<br>
&nbsp;Iam =                     0 received                     3
<br>
&nbsp;Iam =                     1 received                     8
<br>
&nbsp;Iam =                     2 received                     8
<br>
-----
<br>
<p>The rank 0 output line is somewhat bogus; it's just the last value that rank 0 sent.
<br>
<p>The fact that 1, 2, and 3 are displaying 8 seems damning.
<br>
<p>However, I *think* you're just seeing an over-aggressive Fortran optimizing compiler.
<br>
<p>I say this because if I access tempInt(1) in any of the non-zero MCW rank processes before the MPI_RECV, then everything works fine.  For example, if I add the following line as the first executable line:
<br>
<p><pre>
----
 tempInt(1) = 38
----
Then the program runs as expected:
-----
 Iam =                     3 received                     3
 Iam =                     0 received                     3
 Iam =                     1 received                     1
 Iam =                     2 received                     2
-----
Indeed, even if I write/print tempInt(1) before the MPI_RECV, then it works as expected.  Or even call MPI_Address on tempInt(1).
I'm not enough of a wizard to know for sure, but I *think* that there are some funny rules in Fortran about how the compiler can treat memory that it doesn't know for sure has been initialized.  And since mpif.h doesn't provide a prototype for MPI_RECV, the compiler doesn't know that the buffer is an OUT variable, and therefore it should disregard what was in there beforehand, etc.
I'm not 100% sure of this, though -- and I'm a little puzzled as to why the behavior would be different between 32 and 64 bit builds.  Perhaps a Fortran wizard can comment here...?
On Oct 30, 2013, at 7:00 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
&gt; Jeff,
&gt;   Here's what I know:
&gt; 1.  Checked FAQs.  Done
&gt; 2.  Version 1.6.5
&gt; 3. config.log file has been removed by the sysadmin...
&gt; 4. ompi_info -a from head node is in attached as headnode.out
&gt; 5. N/A
&gt; 6. compute node info in attached as compute-x-yy.out
&gt; 7. As discussed, local variables are being overwritten after calls to MPI_RECV from Fortran code
&gt; 8. ifconfig output from head node and computes listed as *-ifconfig.out
&gt; 
&gt; Cheers,
&gt; --Jim
&gt; 
&gt; 
&gt; On Wed, Oct 30, 2013 at 5:29 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Can you send the information listed here:
&gt; 
&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt; 
&gt; 
&gt; On Oct 30, 2013, at 6:22 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; Jeff and Ralph,
&gt; &gt;   Ok, I downshifted to a helloWorld example (attached), bottom line after I hit the MPI_Recv call, my local variable (rank) gets borked.
&gt; &gt;
&gt; &gt; I have compiled with -m64 -fdefault-integer-8 and even have assigned kind=8 to the integers (which would be the preferred method in my case)
&gt; &gt;
&gt; &gt; Your help is appreciated.
&gt; &gt;
&gt; &gt; Cheers,
&gt; &gt; --Jim
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Wed, Oct 30, 2013 at 4:49 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; &gt; On Oct 30, 2013, at 4:35 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
&gt; &gt;
&gt; &gt; &gt;   I have recently built a cluster that uses the 64-bit indexing feature of OpenMPI following the directions at
&gt; &gt; &gt; <a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers</a>
&gt; &gt;
&gt; &gt; That should be correct (i.e., passing -i8 in FFLAGS and FCFLAGS for OMPI 1.6.x).
&gt; &gt;
&gt; &gt; &gt; My question is what are the new prototypes for the MPI calls ?
&gt; &gt; &gt; specifically
&gt; &gt; &gt; MPI_RECV
&gt; &gt; &gt; MPI_Allgathterv
&gt; &gt;
&gt; &gt; They're the same as they've always been.
&gt; &gt;
&gt; &gt; The magic is that the -i8 flag tells the compiler &quot;make all Fortran INTEGERs be 8 bytes, not (the default) 4.&quot;  So Ralph's answer was correct in that all the MPI parameters are INTEGERs -- but you can tell the compiler that all INTEGERs are 8 bytes, not 4, and therefore get &quot;large&quot; integers.
&gt; &gt;
&gt; &gt; Note that this means that you need to compile your application with -i8, too.  That will make *your* INTEGERs also be 8 bytes, and then you'll match what Open MPI is doing.
&gt; &gt;
&gt; &gt; &gt; I'm curious because some off my local variables get killed (set to null) upon my first call to MPI_RECV.  Typically, this is due (in Fortran) to someone not setting the 'status' variable to an appropriate array size.
&gt; &gt;
&gt; &gt; If you didn't compile your application with -i8, this could well be because your application is treating INTEGERs as 4 bytes, but OMPI is treating INTEGERs as 8 bytes.  Nothing good can come from that.
&gt; &gt;
&gt; &gt; If you *did* compile your application with -i8 and you're seeing this kind of wonkyness, we should dig deeper and see what's going on.
&gt; &gt;
&gt; &gt; &gt; My review of mpif.h and mpi.h seem to indicate that the functions are defined as C int types and therefore , I assume, the coercion during the compile makes the library support 64-bit indexing.  ie. int -&gt; long int
&gt; &gt;
&gt; &gt; FWIW: We actually define a type MPI_Fint; its actual type is determined by configure (int or long int, IIRC).  When your Fortran code calls C, we use the MPI_Fint type for parameters, and so it will be either a 4 or 8 byte integer type.
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt; &lt;mpi-test-64bit.tar.bz2&gt;_______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; &lt;ompi.info.tar.bz2&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22882.php">Jim Parker: "[OMPI users] Fwd: Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22880.php">Martin Siegert: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22879.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
