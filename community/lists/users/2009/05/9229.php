<?
$subject_val = "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 17:33:25 2009" -->
<!-- isoreceived="20090505213325" -->
<!-- sent="Tue, 5 May 2009 17:33:17 -0400" -->
<!-- isosent="20090505213317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1" -->
<!-- id="6AAA7B98-0068-4364-B8AB-AC87C1121CA1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3e9a21680905041626v723d7445p14db33c17300010d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 17:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9230.php">MKondrin: "[OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="9228.php">Scott Atchley: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speedevolution"</a>
<li><strong>In reply to:</strong> <a href="9204.php">Vicente Puig: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>Reply:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree; that is a bummer.  :-(
<br>
<p>Warner -- do you have any advice here, perchance?
<br>
<p><p>On May 4, 2009, at 7:26 PM, Vicente Puig wrote:
<br>
<p><span class="quotelev1">&gt; But it doesn't work well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, I am trying to debug a program, &quot;floyd&quot; in this case,  
</span><br>
<span class="quotelev1">&gt; and when I make a breakpoint:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No line 26 in file &quot;../../../gcc-4.2-20060805/libgfortran/fmain.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting disappointed and frustrated that I can not work well  
</span><br>
<span class="quotelev1">&gt; with openmpi in my Mac. There should be a was to make it run in  
</span><br>
<span class="quotelev1">&gt; Xcode, uff...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/5/4 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I get those as well.  I believe that they are (annoying but)  
</span><br>
<span class="quotelev1">&gt; harmless -- an artifact of how the freeware gcc/gofrtran that I use  
</span><br>
<span class="quotelev1">&gt; was built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 1:47 PM, Vicente Puig wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe I had to open a new thread, but if you have any idea why I  
</span><br>
<span class="quotelev1">&gt; receive it when I use gdb for debugging an openmpi program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/Users/admin/build/i386-apple- 
</span><br>
<span class="quotelev1">&gt; darwin9.0.0/libgcc/_umoddi3_s.o&quot; - no debug information available  
</span><br>
<span class="quotelev1">&gt; for &quot;../../../gcc-4.3-20071026/libgcc/../gcc/libgcc2.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/Users/admin/build/i386-apple- 
</span><br>
<span class="quotelev1">&gt; darwin9.0.0/libgcc/_udiv_w_sdiv_s.o&quot; - no debug information  
</span><br>
<span class="quotelev1">&gt; available for &quot;../../../gcc-4.3-20071026/libgcc/../gcc/libgcc2.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/Users/admin/build/i386-apple- 
</span><br>
<span class="quotelev1">&gt; darwin9.0.0/libgcc/_udivmoddi4_s.o&quot; - no debug information available  
</span><br>
<span class="quotelev1">&gt; for &quot;../../../gcc-4.3-20071026/libgcc/../gcc/libgcc2.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/Users/admin/build/i386-apple- 
</span><br>
<span class="quotelev1">&gt; darwin9.0.0/libgcc/unwind-dw2_s.o&quot; - no debug information available  
</span><br>
<span class="quotelev1">&gt; for &quot;../../../gcc-4.3-20071026/libgcc/../gcc/unwind-dw2.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/Users/admin/build/i386-apple- 
</span><br>
<span class="quotelev1">&gt; darwin9.0.0/libgcc/unwind-dw2-fde-darwin_s.o&quot; - no debug information  
</span><br>
<span class="quotelev1">&gt; available for &quot;../../../gcc-4.3-20071026/libgcc/../gcc/unwind-dw2- 
</span><br>
<span class="quotelev1">&gt; fde-darwin.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/Users/admin/build/i386-apple- 
</span><br>
<span class="quotelev1">&gt; darwin9.0.0/libgcc/unwind-c_s.o&quot; - no debug information available  
</span><br>
<span class="quotelev1">&gt; for &quot;../../../gcc-4.3-20071026/libgcc/../gcc/unwind-c.c&quot;.
</span><br>
<span class="quotelev1">&gt; .......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no 'admin' so I don't know why it happen. It works well  
</span><br>
<span class="quotelev1">&gt; with a C program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea??.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/5/4 Vicente Puig &lt;vpuibor_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I can run openmpi perfectly with command line, but I wanted a  
</span><br>
<span class="quotelev1">&gt; graphic interface for debugging because I was having problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/5/4 Warner Yuen &lt;wyuen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Admittedly, I don't use Xcode to build Open MPI either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can just compile Open MPI from the command line and install  
</span><br>
<span class="quotelev1">&gt; everything in /usr/local/. Make sure that gfortran is set in your  
</span><br>
<span class="quotelev1">&gt; path and you should just be able to do a './configure --prefix=/usr/ 
</span><br>
<span class="quotelev1">&gt; local'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After the installation, just make sure that your path is set  
</span><br>
<span class="quotelev1">&gt; correctly when you go to use the newly installed Open MPI. If you  
</span><br>
<span class="quotelev1">&gt; don't set your path, it will always default to using the version of  
</span><br>
<span class="quotelev1">&gt; OpenMPI that ships with Leopard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing
</span><br>
<span class="quotelev1">&gt; Consulting Engineer
</span><br>
<span class="quotelev1">&gt; Apple, Inc.
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 9:13 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;       users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;       users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;       users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. Re: How do I compile OpenMPI in Xcode 3.1 (Vicente Puig)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 4 May 2009 18:13:45 +0200
</span><br>
<span class="quotelev1">&gt; From: Vicente Puig &lt;vpuibor_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;       &lt;3e9a21680905040913u3f36d3c9rdcd3413bfdcd0c9_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I can not make it work with Xcode,  which one could I use?, which  
</span><br>
<span class="quotelev1">&gt; one do
</span><br>
<span class="quotelev1">&gt; you use to compile and debug OpenMPI?.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/5/4 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI comes pre-installed in Leopard; as Warner noted, since  
</span><br>
<span class="quotelev1">&gt; Leopard
</span><br>
<span class="quotelev1">&gt; doesn't ship with a Fortran compiler, the Open MPI that Apple ships  
</span><br>
<span class="quotelev1">&gt; has
</span><br>
<span class="quotelev1">&gt; non-functional mpif77 and mpif90 wrapper compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the Open MPI that you installed manually will use your Fortran
</span><br>
<span class="quotelev1">&gt; compilers, and therefore will have functional mpif77 and mpif90  
</span><br>
<span class="quotelev1">&gt; wrapper
</span><br>
<span class="quotelev1">&gt; compilers.  Hence, you probably need to be sure to use the &quot;right&quot;  
</span><br>
<span class="quotelev1">&gt; wrapper
</span><br>
<span class="quotelev1">&gt; compilers.  It looks like you specified the full path specified to  
</span><br>
<span class="quotelev1">&gt; ExecPath,
</span><br>
<span class="quotelev1">&gt; so I'm not sure why Xcode wouldn't work with that (like I mentioned, I
</span><br>
<span class="quotelev1">&gt; unfortunately don't use Xcode myself, so I don't know why that  
</span><br>
<span class="quotelev1">&gt; wouldn't
</span><br>
<span class="quotelev1">&gt; work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 11:53 AM, Vicente wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I already have gfortran compiler on /usr/local/bin, the same path
</span><br>
<span class="quotelev1">&gt; as my mpif90 compiler. But I've seen when I use the mpif90 on /usr/bin
</span><br>
<span class="quotelev1">&gt; and on  /Developer/usr/bin says it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should be the problem, I will have to change the path to use the
</span><br>
<span class="quotelev1">&gt; gfortran I have installed.
</span><br>
<span class="quotelev1">&gt; How could I do it? (Sorry, I am beginner)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; El 04/05/2009, a las 17:38, Warner Yuen escribi?:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you installed a Fortran compiler? Mac OS X's developer tools do
</span><br>
<span class="quotelev1">&gt; not come with a Fortran compiler, so you'll need to install one if
</span><br>
<span class="quotelev1">&gt; you haven't already done so. I routinely use the Intel IFORT
</span><br>
<span class="quotelev1">&gt; compilers with success. However, I hear many good things about the
</span><br>
<span class="quotelev1">&gt; gfortran compilers on Mac OS X, you can't beat the price of gfortran!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing
</span><br>
<span class="quotelev1">&gt; Consulting Engineer
</span><br>
<span class="quotelev1">&gt; Apple, Inc.
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 7:28 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;   users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;   users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;   users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. How do I compile OpenMPI in Xcode 3.1 (Vicente)
</span><br>
<span class="quotelev1">&gt; 2. Re: 1.3.1 -rf rankfile behaviour ?? (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 4 May 2009 16:12:44 +0200
</span><br>
<span class="quotelev1">&gt; From: Vicente &lt;vpuibor_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] How do I compile OpenMPI in Xcode 3.1
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;1C2C0085-940F-43BB-910F-975871AE2F09_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;   DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, I've seen the FAQ &quot;How do I use Open MPI wrapper compilers in
</span><br>
<span class="quotelev1">&gt; Xcode&quot;, but it's only for MPICC. I am using MPIF90, so I did the
</span><br>
<span class="quotelev1">&gt; same,
</span><br>
<span class="quotelev1">&gt; but changing MPICC for MPIF90, and also the path, but it did not
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building target ?fortran? of project ?fortran? with configuration
</span><br>
<span class="quotelev1">&gt; ?Debug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Checking Dependencies
</span><br>
<span class="quotelev1">&gt; Invalid value 'MPIF90' for GCC_VERSION
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file &quot;MPIF90.cpcompspec&quot; looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 /**
</span><br>
<span class="quotelev1">&gt; 2         Xcode Coompiler Specification for MPIF90
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; 4 */
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; 6 {   Type = Compiler;
</span><br>
<span class="quotelev1">&gt; 7     Identifier = com.apple.compilers.mpif90;
</span><br>
<span class="quotelev1">&gt; 8     BasedOn = com.apple.compilers.gcc.4_0;
</span><br>
<span class="quotelev1">&gt; 9     Name = &quot;MPIF90&quot;;
</span><br>
<span class="quotelev1">&gt; 10     Version = &quot;Default&quot;;
</span><br>
<span class="quotelev1">&gt; 11     Description = &quot;MPI GNU C/C++ Compiler 4.0&quot;;
</span><br>
<span class="quotelev1">&gt; 12     ExecPath = &quot;/usr/local/bin/mpif90&quot;;      // This gets
</span><br>
<span class="quotelev1">&gt; converted to the g++ variant automatically
</span><br>
<span class="quotelev1">&gt; 13     PrecompStyle = pch;
</span><br>
<span class="quotelev1">&gt; 14 }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and is located in &quot;/Developer/Library/Xcode/Plug-ins&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and when I do mpif90 -v on terminal it works well:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-apple-darwin8.10.1
</span><br>
<span class="quotelev1">&gt; Configured with: /tmp/gfortran-20090321/ibin/../gcc/configure --
</span><br>
<span class="quotelev1">&gt; prefix=/usr/local/gfortran --enable-languages=c,fortran --with-gmp=/
</span><br>
<span class="quotelev1">&gt; tmp/gfortran-20090321/gfortran_libs --enable-bootstrap
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.4.0 20090321 (experimental) [trunk revision 144983]
</span><br>
<span class="quotelev1">&gt; (GCC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 4 May 2009 08:28:26 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;   &lt;71d2d8cc0905040728h2002f4d7s4c49219eee29e86f_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I didn't write any of that code - I was just fixing
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; mapper so it would properly map the procs. From what I can tell,
</span><br>
<span class="quotelev1">&gt; the proper
</span><br>
<span class="quotelev1">&gt; things are happening there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll have to dig into the code that specifically deals with parsing
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; results to bind the processes. Afraid that will take awhile longer
</span><br>
<span class="quotelev1">&gt; - pretty
</span><br>
<span class="quotelev1">&gt; dark in that hole.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 4, 2009 at 8:04 AM, Geoffroy Pignot
</span><br>
<span class="quotelev1">&gt; &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, there are no more crashes with my &quot;crazy&quot; mpirun command. But
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; paffinity feature seems to be broken. Indeed I am not able to pin my
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simple test with a program using your plpa library :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r011n006% cat hostf
</span><br>
<span class="quotelev1">&gt; r011n006 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r011n006% cat rankf
</span><br>
<span class="quotelev1">&gt; rank 0=r011n006 slot=0   ----&gt; bind to CPU 0 , exact ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r011n006% /tmp/HALMPI/openmpi-1.4a/bin/mpirun --hostfile hostf --
</span><br>
<span class="quotelev1">&gt; rankfile
</span><br>
<span class="quotelev1">&gt; rankf --wdir /tmp -n 1 a.out
</span><br>
<span class="quotelev1">&gt; PLPA Number of processors online: 4
</span><br>
<span class="quotelev1">&gt; PLPA Number of processor sockets: 2
</span><br>
<span class="quotelev1">&gt; PLPA Socket 0 (ID 0): 2 cores
</span><br>
<span class="quotelev1">&gt; PLPA Socket 1 (ID 3): 2 cores
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ctrl+Z
</span><br>
<span class="quotelev1">&gt; r011n006%bg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r011n006% ps axo stat,user,psr,pid,pcpu,comm | grep gpignot
</span><br>
<span class="quotelev1">&gt; R+   gpignot    3  9271 97.8 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact whatever the slot number I put in my rankfile , a.out
</span><br>
<span class="quotelev1">&gt; always runs
</span><br>
<span class="quotelev1">&gt; on the CPU 3. I was looking for it on CPU 0 accordind to my
</span><br>
<span class="quotelev1">&gt; cpuinfo file
</span><br>
<span class="quotelev1">&gt; (see below)
</span><br>
<span class="quotelev1">&gt; The result is the same if I try another syntax (rank 0=r011n006
</span><br>
<span class="quotelev1">&gt; slot=0:0
</span><br>
<span class="quotelev1">&gt; bind to socket 0 - core 0  , exact ? )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I run on rhel5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r011n006% uname -a
</span><br>
<span class="quotelev1">&gt; Linux r011n006 2.6.18-92.1.1NOMAP32.el5 #1 SMP Sat Mar 15 01:46:39
</span><br>
<span class="quotelev1">&gt; CDT 2008
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My configure is :
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/tmp/openmpi-1.4a --libdir='${exec_prefix}/
</span><br>
<span class="quotelev1">&gt; lib64'
</span><br>
<span class="quotelev1">&gt; --disable-dlopen --disable-mpi-cxx --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r011n006% cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 15
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 6
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev1">&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 10
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev1">&gt; pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev1">&gt; nx lm
</span><br>
<span class="quotelev1">&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips        : 5323.68
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 1
</span><br>
<span class="quotelev1">&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 15
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 6
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev1">&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 3
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 10
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev1">&gt; pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev1">&gt; nx lm
</span><br>
<span class="quotelev1">&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 2
</span><br>
<span class="quotelev1">&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 15
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 6
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev1">&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 1
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 10
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev1">&gt; pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev1">&gt; nx lm
</span><br>
<span class="quotelev1">&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips        : 5319.39
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 3
</span><br>
<span class="quotelev1">&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 15
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 6
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev1">&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev1">&gt; physical id     : 3
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 1
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 10
</span><br>
<span class="quotelev1">&gt; wp              : yes
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev1">&gt; pge mca
</span><br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev1">&gt; nx lm
</span><br>
<span class="quotelev1">&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 4 May 2009 04:45:57 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;D01D7B16-4B47-46F3-AD41-D1A90B2E4927_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;   DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My apologies - I wasn't clear enough. You need a tarball from
</span><br>
<span class="quotelev1">&gt; r21111
</span><br>
<span class="quotelev1">&gt; or greater...such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 2:14 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the openmpi-1.4a1r21095.tar.gz tarball, but unfortunately my
</span><br>
<span class="quotelev1">&gt; command doesn't work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankf:
</span><br>
<span class="quotelev1">&gt; rank 0=node1 slot=*
</span><br>
<span class="quotelev1">&gt; rank 1=node2 slot=*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat hostf:
</span><br>
<span class="quotelev1">&gt; node1 slots=2
</span><br>
<span class="quotelev1">&gt; node2 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1
</span><br>
<span class="quotelev1">&gt; hostname : --host node2 -n 1 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error, invalid rank (1) in the rankfile (rankf)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file.c at line 403
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev1">&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph, could you tell me if my command syntax is correct or
</span><br>
<span class="quotelev1">&gt; not ? if
</span><br>
<span class="quotelev1">&gt; not, give me the expected one ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Immediately Sir !!! :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;   &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this is fixed now in our development trunk - you can
</span><br>
<span class="quotelev1">&gt; download any
</span><br>
<span class="quotelev1">&gt; tarball starting from last night and give it a try, if you like.
</span><br>
<span class="quotelev1">&gt; Any
</span><br>
<span class="quotelev1">&gt; feedback would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clearly a bug exists in the program. I'll try to take a look at it
</span><br>
<span class="quotelev1">&gt; (if Lenny
</span><br>
<span class="quotelev1">&gt; doesn't get to it first), but it won't be until later in the week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with you Ralph , and that 's what I expect from openmpi
</span><br>
<span class="quotelev1">&gt; but my
</span><br>
<span class="quotelev1">&gt; second example shows that it's not working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat hostfile.0
</span><br>
<span class="quotelev1">&gt; r011n002 slots=4
</span><br>
<span class="quotelev1">&gt; r011n003 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankfile.0
</span><br>
<span class="quotelev1">&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; ### CRASHED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt; above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;  DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev1">&gt; app_context basis. So the ranks in your rankfile must correspond
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, that means you have to count ranks. In your case,
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; only have four, so that makes life easier. Your rankfile would
</span><br>
<span class="quotelev1">&gt; look
</span><br>
<span class="quotelev1">&gt; something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev1">&gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that my examples are not very clear. What I want to do
</span><br>
<span class="quotelev1">&gt; is to
</span><br>
<span class="quotelev1">&gt; launch a multiexes application (masters-slaves) and benefit
</span><br>
<span class="quotelev1">&gt; from the
</span><br>
<span class="quotelev1">&gt; processor affinity.
</span><br>
<span class="quotelev1">&gt; Could you show me how to convert this command , using -rf option
</span><br>
<span class="quotelev1">&gt; (whatever the affinity is)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host
</span><br>
<span class="quotelev1">&gt; r001n002
</span><br>
<span class="quotelev1">&gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
</span><br>
<span class="quotelev1">&gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev1">&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev1">&gt; defined,
</span><br>
<span class="quotelev1">&gt; while n=1, which means only rank 0 is present and can be
</span><br>
<span class="quotelev1">&gt; allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
</span><br>
<span class="quotelev1">&gt; hostfile.0
</span><br>
<span class="quotelev1">&gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev1">&gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev1">&gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev1">&gt; uses an MCA interface that is not recognized (component MCA
</span><br>
<span class="quotelev1">&gt; v1.0.0 !=
</span><br>
<span class="quotelev1">&gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt; failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant
</span><br>
<span class="quotelev1">&gt; to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_carto_base_select failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev1">&gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev1">&gt; attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt; above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev1">&gt; openmpi and I
</span><br>
<span class="quotelev1">&gt; would like to know if the rankfile behaviour I will describe
</span><br>
<span class="quotelev1">&gt; below
</span><br>
<span class="quotelev1">&gt; is normal
</span><br>
<span class="quotelev1">&gt; or not ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat hostfile.0
</span><br>
<span class="quotelev1">&gt; r011n002 slots=4
</span><br>
<span class="quotelev1">&gt; r011n003 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankfile.0
</span><br>
<span class="quotelev1">&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ###
</span><br>
<span class="quotelev1">&gt; OK
</span><br>
<span class="quotelev1">&gt; r011n002
</span><br>
<span class="quotelev1">&gt; r011n003
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; ### CRASHED
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev1">&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt; above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; It seems that the rankfile option is not propagted to the second
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt; line ; there is no global understanding of the ranking inside a
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##################################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assuming that , I tried to provide a rankfile to each command
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankfile.0
</span><br>
<span class="quotelev1">&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat rankfile.1
</span><br>
<span class="quotelev1">&gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
</span><br>
<span class="quotelev1">&gt; rankfile.1
</span><br>
<span class="quotelev1">&gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev1">&gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev1">&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev1">&gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev1">&gt; [0x5557decd]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev1">&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev1">&gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev1">&gt; [0x555842a7]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; [0x556098c0]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt; [0x804aa27]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt; [0x804a022]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev1">&gt; [0x9f1dec]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt; [0x8049f71]
</span><br>
<span class="quotelev1">&gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope that I've found a bug because it would be very important
</span><br>
<span class="quotelev1">&gt; for me to
</span><br>
<span class="quotelev1">&gt; have this kind of capabiliy .
</span><br>
<span class="quotelev1">&gt; Launch a multiexe mpirun command line and be able to bind my
</span><br>
<span class="quotelev1">&gt; exes
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; sockets together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1202, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1218, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1221, Issue 3
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1221, Issue 6
</span><br>
<span class="quotelev1">&gt; **************************************
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1221, Issue 12
</span><br>
<span class="quotelev1">&gt; ***************************************
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
<li><strong>Next message:</strong> <a href="9230.php">MKondrin: "[OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="9228.php">Scott Atchley: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speedevolution"</a>
<li><strong>In reply to:</strong> <a href="9204.php">Vicente Puig: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>Reply:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
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
