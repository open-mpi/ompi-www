<?
$subject_val = "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 11:14:27 2009" -->
<!-- isoreceived="20090506151427" -->
<!-- sent="Wed, 6 May 2009 17:14:21 +0200" -->
<!-- isosent="20090506151421" -->
<!-- name="Vicente Puig" -->
<!-- email="vpuibor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1" -->
<!-- id="3e9a21680905060814n8deafdeoefc5ff9e14b0c31a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="93E18AA0-56DA-42FF-BFB0-485656CD1A28_at_gmail.com" -->
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
<strong>From:</strong> Vicente Puig (<em>vpuibor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 11:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>In reply to:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I don't understand, how can I try the fortran from macports??.
<br>
<p>2009/5/6 Luis Vitorio Cargnini &lt;lvcargnini_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; This problem is occuring because the fortran wasn't compiled with the debug
</span><br>
<span class="quotelev1">&gt; symbols:
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file
</span><br>
<span class="quotelev1">&gt; &quot;/Users/admin/build/i386-apple-darwin9.0.0/libgcc/_udiv_w_sdiv_s.o&quot; - no
</span><br>
<span class="quotelev1">&gt; debug information available for
</span><br>
<span class="quotelev1">&gt; &quot;../../../gcc-4.3-20071026/libgcc/../gcc/libgcc2.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the same problem for who is using LLVM in Xcode, there is no debug
</span><br>
<span class="quotelev1">&gt; symbols to create a debug release, try create a release and see if it will
</span><br>
<span class="quotelev1">&gt; compile at all and try the fortran from macports it will works smoothly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 09-05-05 &#224; 17:33, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I agree; that is a bummer.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Warner -- do you have any advice here, perchance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 4, 2009, at 7:26 PM, Vicente Puig wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  But it doesn't work well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, I am trying to debug a program, &quot;floyd&quot; in this case, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I make a breakpoint:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No line 26 in file &quot;../../../gcc-4.2-20060805/libgfortran/fmain.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting disappointed and frustrated that I can not work well with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi in my Mac. There should be a was to make it run in Xcode, uff...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/5/4 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get those as well.  I believe that they are (annoying but) harmless --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an artifact of how the freeware gcc/gofrtran that I use was built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2009, at 1:47 PM, Vicente Puig wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe I had to open a new thread, but if you have any idea why I receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it when I use gdb for debugging an openmpi program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/Users/admin/build/i386-apple-darwin9.0.0/libgcc/_umoddi3_s.o&quot; - no debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../gcc-4.3-20071026/libgcc/../gcc/libgcc2.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/Users/admin/build/i386-apple-darwin9.0.0/libgcc/_udiv_w_sdiv_s.o&quot; - no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug information available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../gcc-4.3-20071026/libgcc/../gcc/libgcc2.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/Users/admin/build/i386-apple-darwin9.0.0/libgcc/_udivmoddi4_s.o&quot; - no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug information available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../gcc-4.3-20071026/libgcc/../gcc/libgcc2.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/Users/admin/build/i386-apple-darwin9.0.0/libgcc/unwind-dw2_s.o&quot; - no debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../gcc-4.3-20071026/libgcc/../gcc/unwind-dw2.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/Users/admin/build/i386-apple-darwin9.0.0/libgcc/unwind-dw2-fde-darwin_s.o&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - no debug information available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../gcc-4.3-20071026/libgcc/../gcc/unwind-dw2-fde-darwin.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/Users/admin/build/i386-apple-darwin9.0.0/libgcc/unwind-c_s.o&quot; - no debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../gcc-4.3-20071026/libgcc/../gcc/unwind-c.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .......
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no 'admin' so I don't know why it happen. It works well with a C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea??.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vincent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/5/4 Vicente Puig &lt;vpuibor_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can run openmpi perfectly with command line, but I wanted a graphic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface for debugging because I was having problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vincent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/5/4 Warner Yuen &lt;wyuen_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Admittedly, I don't use Xcode to build Open MPI either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can just compile Open MPI from the command line and install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything in /usr/local/. Make sure that gfortran is set in your path and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you should just be able to do a './configure --prefix=/usr/local'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After the installation, just make sure that your path is set correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when you go to use the newly installed Open MPI. If you don't set your path,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it will always default to using the version of OpenMPI that ships with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leopard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warner Yuen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Consulting Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apple, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2009, at 9:13 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Re: How do I compile OpenMPI in Xcode 3.1 (Vicente Puig)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 4 May 2009 18:13:45 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Vicente Puig &lt;vpuibor_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;3e9a21680905040913u3f36d3c9rdcd3413bfdcd0c9_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I can not make it work with Xcode,  which one could I use?, which one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you use to compile and debug OpenMPI?.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vincent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/5/4 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI comes pre-installed in Leopard; as Warner noted, since Leopard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't ship with a Fortran compiler, the Open MPI that Apple ships has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-functional mpif77 and mpif90 wrapper compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the Open MPI that you installed manually will use your Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers, and therefore will have functional mpif77 and mpif90 wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers.  Hence, you probably need to be sure to use the &quot;right&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers.  It looks like you specified the full path specified to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ExecPath,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I'm not sure why Xcode wouldn't work with that (like I mentioned, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unfortunately don't use Xcode myself, so I don't know why that wouldn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2009, at 11:53 AM, Vicente wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I already have gfortran compiler on /usr/local/bin, the same path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as my mpif90 compiler. But I've seen when I use the mpif90 on /usr/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and on  /Developer/usr/bin says it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That should be the problem, I will have to change the path to use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran I have installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How could I do it? (Sorry, I am beginner)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; El 04/05/2009, a las 17:38, Warner Yuen escribi?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you installed a Fortran compiler? Mac OS X's developer tools do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not come with a Fortran compiler, so you'll need to install one if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you haven't already done so. I routinely use the Intel IFORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers with success. However, I hear many good things about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran compilers on Mac OS X, you can't beat the price of gfortran!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warner Yuen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Consulting Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apple, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2009, at 7:28 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. How do I compile OpenMPI in Xcode 3.1 (Vicente)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Re: 1.3.1 -rf rankfile behaviour ?? (Ralph Castain)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 4 May 2009 16:12:44 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Vicente &lt;vpuibor_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] How do I compile OpenMPI in Xcode 3.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;1C2C0085-940F-43BB-910F-975871AE2F09_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, I've seen the FAQ &quot;How do I use Open MPI wrapper compilers in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xcode&quot;, but it's only for MPICC. I am using MPIF90, so I did the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but changing MPICC for MPIF90, and also the path, but it did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Building target ?fortran? of project ?fortran? with configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ?Debug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checking Dependencies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Invalid value 'MPIF90' for GCC_VERSION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file &quot;MPIF90.cpcompspec&quot; looks like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 /**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2         Xcode Coompiler Specification for MPIF90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6 {   Type = Compiler;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7     Identifier = com.apple.compilers.mpif90;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8     BasedOn = com.apple.compilers.gcc.4_0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9     Name = &quot;MPIF90&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10     Version = &quot;Default&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11     Description = &quot;MPI GNU C/C++ Compiler 4.0&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12     ExecPath = &quot;/usr/local/bin/mpif90&quot;;      // This gets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; converted to the g++ variant automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 13     PrecompStyle = pch;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and is located in &quot;/Developer/Library/Xcode/Plug-ins&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and when I do mpif90 -v on terminal it works well:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Target: i386-apple-darwin8.10.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configured with: /tmp/gfortran-20090321/ibin/../gcc/configure --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefix=/usr/local/gfortran --enable-languages=c,fortran --with-gmp=/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmp/gfortran-20090321/gfortran_libs --enable-bootstrap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc version 4.4.0 20090321 (experimental) [trunk revision 144983]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (GCC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vincent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 4 May 2009 08:28:26 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;71d2d8cc0905040728h2002f4d7s4c49219eee29e86f_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, I didn't write any of that code - I was just fixing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mapper so it would properly map the procs. From what I can tell,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the proper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things are happening there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll have to dig into the code that specifically deals with parsing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results to bind the processes. Afraid that will take awhile longer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - pretty
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dark in that hole.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, May 4, 2009 at 8:04 AM, Geoffroy Pignot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, there are no more crashes with my &quot;crazy&quot; mpirun command. But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity feature seems to be broken. Indeed I am not able to pin my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simple test with a program using your plpa library :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006% cat hostf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006% cat rankf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=r011n006 slot=0   ----&gt; bind to CPU 0 , exact ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006% /tmp/HALMPI/openmpi-1.4a/bin/mpirun --hostfile hostf --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rankf --wdir /tmp -n 1 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PLPA Number of processors online: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PLPA Number of processor sockets: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PLPA Socket 0 (ID 0): 2 cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PLPA Socket 1 (ID 3): 2 cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ctrl+Z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006%bg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006% ps axo stat,user,psr,pid,pcpu,comm | grep gpignot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R+   gpignot    3  9271 97.8 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact whatever the slot number I put in my rankfile , a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always runs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the CPU 3. I was looking for it on CPU 0 accordind to my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuinfo file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (see below)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result is the same if I try another syntax (rank 0=r011n006
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bind to socket 0 - core 0  , exact ? )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: I run on rhel5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006% uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux r011n006 2.6.18-92.1.1NOMAP32.el5 #1 SMP Sat Mar 15 01:46:39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CDT 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My configure is :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/tmp/openmpi-1.4a --libdir='${exec_prefix}/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib64'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-dlopen --disable-mpi-cxx --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n006% cat /proc/cpuinfo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor       : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id         : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pge mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nx lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips        : 5323.68
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor       : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id     : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id         : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pge mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nx lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor       : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id         : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pge mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nx lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips        : 5319.39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor       : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id     : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id         : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pge mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nx lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 4 May 2009 04:45:57 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;D01D7B16-4B47-46F3-AD41-D1A90B2E4927_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My apologies - I wasn't clear enough. You need a tarball from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r21111
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or greater...such as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2009, at 2:14 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got the openmpi-1.4a1r21095.tar.gz tarball, but unfortunately my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command doesn't work
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat rankf:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node1 slot=*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node2 slot=*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat hostf:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1 slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node2 slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname : --host node2 -n 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error, invalid rank (1) in the rankfile (rankf)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_rank_file.c at line 403
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph, could you tell me if my command syntax is correct or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not ? if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not, give me the expected one ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Immediately Sir !!! :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks again Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe this is fixed now in our development trunk - you can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; download any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tarball starting from last night and give it a try, if you like.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feedback would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clearly a bug exists in the program. I'll try to take a look at it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (if Lenny
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't get to it first), but it won't be until later in the week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree with you Ralph , and that 's what I expect from openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second example shows that it's not working
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat hostfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n002 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n003 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat rankfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ### CRASHED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app_context basis. So the ranks in your rankfile must correspond
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, that means you have to count ranks. In your case,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only have four, so that makes life easier. Your rankfile would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree that my examples are not very clear. What I want to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch a multiexes application (masters-slaves) and benefit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor affinity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you show me how to convert this command , using -rf option
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (whatever the affinity is)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r001n002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defined,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while n=1, which means only rank 0 is present and can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uses an MCA interface that is not recognized (component MCA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.0.0 !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort. There are many reasons that a parallel process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems. This failure appears to be an internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_carto_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would like to know if the rankfile behaviour I will describe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is normal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or not ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat hostfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n002 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n003 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat rankfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ###
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r011n003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ### CRASHED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the rankfile option is not propagted to the second
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line ; there is no global understanding of the ranking inside a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assuming that , I tried to provide a rankfile to each command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat rankfile.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat rankfile.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rankfile.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x5557decd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x555842a7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_plm_rsh.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x556098c0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x804aa27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x804a022]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x9f1dec]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x8049f71]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope that I've found a bug because it would be very important
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for me to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have this kind of capabiliy .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Launch a multiexe mpirun command line and be able to bind my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sockets together.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for your help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geoffroy
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
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1202, Issue 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1218, Issue 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1221, Issue 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1221, Issue 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1221, Issue 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***************************************
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>In reply to:</strong> <a href="9234.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
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
