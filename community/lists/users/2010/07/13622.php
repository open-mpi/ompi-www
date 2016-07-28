<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 11:14:33 2010" -->
<!-- isoreceived="20100713151433" -->
<!-- sent="Tue, 13 Jul 2010 11:14:08 -0400" -->
<!-- isosent="20100713151408" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="AANLkTinqPvt8Z2SoLFM5nhLCOaSucQkqFXOMLjwPhItR_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C3BACB5.2070405_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install OpenMPI on Win 7 machine<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 11:14:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13623.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13621.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It works perfectly! Thanks a lot guys. You've been really helpful especially
<br>
you Damien Hocking and Shiqing Fan. All this complicated process makes me
<br>
wonder how complicated the code behind OpenMPI and MPI in general is. In
<br>
some cases, mailing lists really are a lot more useful than online forums.
<br>
<p>Again, thank you very much for your help.
<br>
<p>Cheers,
<br>
Alex
<br>
<p>On Mon, Jul 12, 2010 at 8:00 PM, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Cool.  If you're building OpenMPI on 32-bit Windows as well, you won't
</span><br>
<span class="quotelev1">&gt; have any 64-bit switches to sort out.  This part of my instructions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Visual Studio command prompt: &quot;Start, All Programs, Visual Studio 2008,
</span><br>
<span class="quotelev1">&gt; Visual Studio Tools, Visual Studio 2008 Win64 x64 Command Prompt&quot; is
</span><br>
<span class="quotelev1">&gt; slightly wrong for 32-bit Windows, there won't be a Win64 x64 prompt.  There
</span><br>
<span class="quotelev1">&gt; will be only one command prompt option on a 32-bit install (use that), and
</span><br>
<span class="quotelev1">&gt; CMake will have set you up with a 32-bit build by default, so you'll be
</span><br>
<span class="quotelev1">&gt; fine.  Post back if you need help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/07/2010 5:47 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running 32 bit Windows. The actual cluster is 64 bit and the OS is
</span><br>
<span class="quotelev1">&gt; CentOS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 12, 2010 at 7:15 PM, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  You don't need to check anything alse in the red window, OpenMPI doesn't
</span><br>
<span class="quotelev2">&gt;&gt; know it's in a virtual machine.  If you're running Windows in a virtual
</span><br>
<span class="quotelev2">&gt;&gt; cluster, are you running as 32-bit or 64-bit?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/07/2010 5:05 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wow thanks a lot guys. I'll try it tomorrow morning. I'll admit that this
</span><br>
<span class="quotelev2">&gt;&gt; time when i saw that there are some header files &quot;not found&quot; i didn't even
</span><br>
<span class="quotelev2">&gt;&gt; bother going through the all process as I did previously. Could have had it
</span><br>
<span class="quotelev2">&gt;&gt; installed by today. Well i'll give it a try tomorrow and come back to you
</span><br>
<span class="quotelev2">&gt;&gt; with a confirmation of whether it works or not. For the &quot;virtual cluster&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; should I select check any of the checkboxes in the red window?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Either way, thanks a lot guys, you've been of great help to me. I really
</span><br>
<span class="quotelev2">&gt;&gt; want to do my project well, as not many almost-18 year olds get to work with
</span><br>
<span class="quotelev2">&gt;&gt; clusters and I'd like to take full advantage of the experience
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 12, 2010 at 5:38 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That red window is what you should see after the first Configure step in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMake.  You need to do the next few steps in CMake and Visual Studio to get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a Windows OpenMPI build done.  That's how CMake works.  It's complicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because CMake has to be able to build on multiple OSes so what you do on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each OS is different.  Here's what to do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As part of your original CMake setup, it will have asked you where to put
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the CMake binaries.  That's in &quot;Where to build the binaries&quot; line in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main CMake window, at the top.  Note that these binaries aren't the OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binaries, they're the Visual Studio project files that Visual Studio uses to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build the OpenMPI binaries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See the CMAKE_BUILD_TYPE line?  It says Debug.  Change Debug to Release
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you want a Release build (you probably do).  Press the Configure button
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again and let it run.  That should be all clean.  Now press the Generate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; button.  That will build the Visual Studio project files for you.  They'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go to the &quot;Where to build the binaries&quot; directory.  From here you're done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with CMake.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Next you have two options.  You can build from a command line, or from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; within Visual Studio itself.  For command-line instructions, read this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/community/lists/users/2010/02/12013.php">https://www.open-mpi.org/community/lists/users/2010/02/12013.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that you need to execute the devenv commands in that post from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; within a Visual Studio command prompt: Start, All Programs, Visual Studio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2008, Visual Studio Tools, Visual Studio 2008 Win64 x64 Command Prompt.  I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assuming you want a 64-bit build.  You need to be in that &quot;Where to build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the binaries&quot; directory as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To use Visual Studio directly, start Visual Studio, and open the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI.sln project file that's in your &quot;Where to build the binaries&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory.  In the Solution Explorer you'll see a list of sub-projects.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Right-click the top heading: Solution 'Open MPI' and select Configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Manager.  You should get a window that says at the top Active Solution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuration, with Release below it.  If it says Debug, just change that to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Release and it will flip all the sub-projects over as well.  Note on the the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list of projects the INSTALL project will not be checked.  Check that now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and close the window.   Now right-click Solution 'Open MPI' again and hit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Build Solution.  It takes a while to compile everything.  If you get errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about error code -31 and mt.exe at the end of the build, that's your virus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scanner locking the new exe/dll files and the install project complains.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Keep right-clicking and Build Solution until it goes through.  The final
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI include files and binaries are in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Users\Alex's\Downloads......\installed directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS OpenMPI 1.4.2 doesn't have Fortran support on Windows.  You need the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dev 1.5 series for that and a Fortran compiler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/07/2010 11:35 AM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hey,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I installed a 90 day trial of Visual Studio 2008, and I am pretty sure I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; am getting the exact same thing. The log and the picture are attached just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as last time. Any new ideas?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   _______________________________________________
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13622/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13623.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13621.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
