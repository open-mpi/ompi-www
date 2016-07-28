<?
$subject_val = "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 14:54:32 2008" -->
<!-- isoreceived="20081103195432" -->
<!-- sent="Mon, 3 Nov 2008 14:54:25 -0500" -->
<!-- isosent="20081103195425" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)" -->
<!-- id="45698801-0857-466F-A19D-C529F72D4A18_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0D3A8F0F98B1434DA2BFA349303922AA_at_exstream.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 14:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7189.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7186.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you replicate the scenario in smaller / different cases?
<br>
<p>- write a sample plugin in C instead of C++
<br>
- write a non-MPI Fortran application that loads your C++ application
<br>
- ...?
<br>
<p>In short, *MPI* shouldn't be interfering with Fortran/C++ common  
<br>
blocks.  Try taking MPI out of the picture and see if that makes the  
<br>
problem go away.
<br>
<p>Those are pretty much shots in the dark, but I don't know where to go,  
<br>
either -- try random things until you find what you want.
<br>
<p><p>On Nov 3, 2008, at 3:51 AM, Rajesh Ramaya wrote:
<br>
<p><span class="quotelev1">&gt; Helllo Jeff, Gustavo, Mi
</span><br>
<span class="quotelev1">&gt;    Thank for the advice. I am familiar with the difference in the  
</span><br>
<span class="quotelev1">&gt; compiler code generation for C, C++ &amp; FORTRAN. I even tried to look  
</span><br>
<span class="quotelev1">&gt; at some of the common block symbols. The name of the symbol remains  
</span><br>
<span class="quotelev1">&gt; the same. The only difference that I observe is in FORTRAN compiled  
</span><br>
<span class="quotelev1">&gt; *.o  0000000000515bc0 B aux7loc_  and the C++ compiled code  U  
</span><br>
<span class="quotelev1">&gt; aux7loc_  the memory is not allocated as it has been declared as  
</span><br>
<span class="quotelev1">&gt; extern in C++. When the executable loads the shared library it finds  
</span><br>
<span class="quotelev1">&gt; all the undefined symbols. Atleast if it did not manage to find a  
</span><br>
<span class="quotelev1">&gt; single symbol it prints undefined symbol error.
</span><br>
<span class="quotelev1">&gt; I am completely stuck up and do not know how to continue further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rajesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Mi Yan
</span><br>
<span class="quotelev1">&gt; Sent: samedi 1 novembre 2008 23:26
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: 'Open MPI Users'; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So your tests show:
</span><br>
<span class="quotelev1">&gt; 1. &quot;Shared library in FORTRAN + MPI executable in FORTRAN&quot; works.
</span><br>
<span class="quotelev1">&gt; 2. &quot;Shared library in C++ + MPI executable in FORTRAN &quot; does not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that the symbols in C library are not really  
</span><br>
<span class="quotelev1">&gt; recognized by FORTRAN executable as you thought. What compilers did  
</span><br>
<span class="quotelev1">&gt; yo use to built OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Different compiler has different convention to handle symbols. E.g.  
</span><br>
<span class="quotelev1">&gt; if there is a variable &quot;var_foo&quot; in your FORTRAN code, some FORTRN  
</span><br>
<span class="quotelev1">&gt; compiler will save &quot;var_foo_&quot; in the object file by default; if you  
</span><br>
<span class="quotelev1">&gt; want to access &quot;var_foo&quot; in C code, you actually need to refer  
</span><br>
<span class="quotelev1">&gt; &quot;var_foo_&quot; in C code. If you define &quot;var_foo&quot; in a module in the  
</span><br>
<span class="quotelev1">&gt; FORTAN compiler, some FORTRAN compiler may append the module name to  
</span><br>
<span class="quotelev1">&gt; &quot;var_foo&quot;.
</span><br>
<span class="quotelev1">&gt; So I suggest to check the symbols in the object files generated by  
</span><br>
<span class="quotelev1">&gt; your FORTAN and C compiler to see the difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mi
</span><br>
<span class="quotelev1">&gt; &lt;image001.gif&gt;&quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 10/31/2008 03:07 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev1">&gt; &quot;'Open MPI Users'&quot; &lt;users_at_[hidden]&gt;, &quot;'Jeff Squyres'&quot; &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Jeff Squyres,
</span><br>
<span class="quotelev1">&gt;   Thank you very much for the immediate reply. I am able to  
</span><br>
<span class="quotelev1">&gt; successfully
</span><br>
<span class="quotelev1">&gt; access the data from the common block but the values are zero. In my
</span><br>
<span class="quotelev1">&gt; algorithm I even update a common block but the update made by the  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; library is not taken in to account by the executable. Can you please  
</span><br>
<span class="quotelev1">&gt; be very
</span><br>
<span class="quotelev1">&gt; specific how to make the parallel algorithm aware of the data?  
</span><br>
<span class="quotelev1">&gt; Actually I am
</span><br>
<span class="quotelev1">&gt; not writing any MPI code inside? It's the executable (third party  
</span><br>
<span class="quotelev1">&gt; software)
</span><br>
<span class="quotelev1">&gt; who does that part. All that I am doing is to compile my code with  
</span><br>
<span class="quotelev1">&gt; MPI c
</span><br>
<span class="quotelev1">&gt; compiler and add it in the LD_LIBIRARY_PATH.
</span><br>
<span class="quotelev1">&gt; In fact I did a simple test by creating a shared library using a  
</span><br>
<span class="quotelev1">&gt; FORTRAN
</span><br>
<span class="quotelev1">&gt; code and the update made to the common block is taken in to account  
</span><br>
<span class="quotelev1">&gt; by the
</span><br>
<span class="quotelev1">&gt; executable. Is there any flag or pragma that need to be activated  
</span><br>
<span class="quotelev1">&gt; for mixed
</span><br>
<span class="quotelev1">&gt; language MPI?
</span><br>
<span class="quotelev1">&gt; Thank you once again for the reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rajesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: vendredi 31 octobre 2008 18:53
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 11:57 AM, Rajesh Ramaya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     I am completely new to MPI. I have a basic question concerning
</span><br>
<span class="quotelev2">&gt; &gt; MPI and mixed language coding. I hope any of you could help me out.
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to access FORTRAN common blocks in C++ in a MPI
</span><br>
<span class="quotelev2">&gt; &gt; compiled code. It works without MPI but as soon I switch to MPI the
</span><br>
<span class="quotelev2">&gt; &gt; access of common block does not work anymore.
</span><br>
<span class="quotelev2">&gt; &gt; I have a Linux MPI executable which loads a shared library at
</span><br>
<span class="quotelev2">&gt; &gt; runtime and resolves all undefined symbols etc  The shared library
</span><br>
<span class="quotelev2">&gt; &gt; is written in C++ and the MPI executable in written in FORTRAN. Some
</span><br>
<span class="quotelev2">&gt; &gt; of the input that the shared library looking for are in the Fortran
</span><br>
<span class="quotelev2">&gt; &gt; common blocks. As I access those common blocks during runtime the
</span><br>
<span class="quotelev2">&gt; &gt; values are not  initialized.  I would like to know if what I am
</span><br>
<span class="quotelev2">&gt; &gt; doing is possible ?I hope that my problem is clear......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, MPI should not get in the way of sharing common blocks
</span><br>
<span class="quotelev1">&gt; between Fortran and C/C++.  Indeed, in Open MPI itself, we share a few
</span><br>
<span class="quotelev1">&gt; common blocks between Fortran and the main C Open MPI implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the exact symptom that you are seeing?  Is the application
</span><br>
<span class="quotelev1">&gt; failing to resolve symbols at run-time, possibly indicating that
</span><br>
<span class="quotelev1">&gt; something hasn't instantiated a common block?  Or are you able to
</span><br>
<span class="quotelev1">&gt; successfully access the data from the common block, but it doesn't
</span><br>
<span class="quotelev1">&gt; have the values you expect (e.g., perhaps you're seeing all zeros)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the former, you might want to check your build procedure.  You
</span><br>
<span class="quotelev1">&gt; *should* be able to simply replace your C++ / F90 compilers with
</span><br>
<span class="quotelev1">&gt; mpicxx and mpif90, respectively, and be able to build an MPI version
</span><br>
<span class="quotelev1">&gt; of your app.  If the latter, you might need to make your parallel
</span><br>
<span class="quotelev1">&gt; algorithm aware of what data is available in which MPI process --
</span><br>
<span class="quotelev1">&gt; perhaps not all the data is filled in on each MPI process...?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7189.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7186.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
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
