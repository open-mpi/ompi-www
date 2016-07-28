<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 19:48:10 2010" -->
<!-- isoreceived="20100712234810" -->
<!-- sent="Mon, 12 Jul 2010 19:47:45 -0400" -->
<!-- isosent="20100712234745" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="AANLkTinqZlaf5-ZjMh1kZzRyzGR41wYy_WiaKhYyRaGH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C3BA217.2090106_at_khubla.com" -->
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
<strong>Date:</strong> 2010-07-12 19:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running 32 bit Windows. The actual cluster is 64 bit and the OS is
<br>
CentOS
<br>
<p>On Mon, Jul 12, 2010 at 7:15 PM, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  You don't need to check anything alse in the red window, OpenMPI doesn't
</span><br>
<span class="quotelev1">&gt; know it's in a virtual machine.  If you're running Windows in a virtual
</span><br>
<span class="quotelev1">&gt; cluster, are you running as 32-bit or 64-bit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/07/2010 5:05 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wow thanks a lot guys. I'll try it tomorrow morning. I'll admit that this
</span><br>
<span class="quotelev1">&gt; time when i saw that there are some header files &quot;not found&quot; i didn't even
</span><br>
<span class="quotelev1">&gt; bother going through the all process as I did previously. Could have had it
</span><br>
<span class="quotelev1">&gt; installed by today. Well i'll give it a try tomorrow and come back to you
</span><br>
<span class="quotelev1">&gt; with a confirmation of whether it works or not. For the &quot;virtual cluster&quot;,
</span><br>
<span class="quotelev1">&gt; should I select check any of the checkboxes in the red window?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Either way, thanks a lot guys, you've been of great help to me. I really
</span><br>
<span class="quotelev1">&gt; want to do my project well, as not many almost-18 year olds get to work with
</span><br>
<span class="quotelev1">&gt; clusters and I'd like to take full advantage of the experience
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 12, 2010 at 5:38 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alex,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That red window is what you should see after the first Configure step in
</span><br>
<span class="quotelev2">&gt;&gt; CMake.  You need to do the next few steps in CMake and Visual Studio to get
</span><br>
<span class="quotelev2">&gt;&gt; a Windows OpenMPI build done.  That's how CMake works.  It's complicated
</span><br>
<span class="quotelev2">&gt;&gt; because CMake has to be able to build on multiple OSes so what you do on
</span><br>
<span class="quotelev2">&gt;&gt; each OS is different.  Here's what to do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As part of your original CMake setup, it will have asked you where to put
</span><br>
<span class="quotelev2">&gt;&gt; the CMake binaries.  That's in &quot;Where to build the binaries&quot; line in the
</span><br>
<span class="quotelev2">&gt;&gt; main CMake window, at the top.  Note that these binaries aren't the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; binaries, they're the Visual Studio project files that Visual Studio uses to
</span><br>
<span class="quotelev2">&gt;&gt; build the OpenMPI binaries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See the CMAKE_BUILD_TYPE line?  It says Debug.  Change Debug to Release if
</span><br>
<span class="quotelev2">&gt;&gt; you want a Release build (you probably do).  Press the Configure button
</span><br>
<span class="quotelev2">&gt;&gt; again and let it run.  That should be all clean.  Now press the Generate
</span><br>
<span class="quotelev2">&gt;&gt; button.  That will build the Visual Studio project files for you.  They'll
</span><br>
<span class="quotelev2">&gt;&gt; go to the &quot;Where to build the binaries&quot; directory.  From here you're done
</span><br>
<span class="quotelev2">&gt;&gt; with CMake.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Next you have two options.  You can build from a command line, or from
</span><br>
<span class="quotelev2">&gt;&gt; within Visual Studio itself.  For command-line instructions, read this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/community/lists/users/2010/02/12013.php">https://www.open-mpi.org/community/lists/users/2010/02/12013.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that you need to execute the devenv commands in that post from within
</span><br>
<span class="quotelev2">&gt;&gt; a Visual Studio command prompt: Start, All Programs, Visual Studio 2008,
</span><br>
<span class="quotelev2">&gt;&gt; Visual Studio Tools, Visual Studio 2008 Win64 x64 Command Prompt.  I'm
</span><br>
<span class="quotelev2">&gt;&gt; assuming you want a 64-bit build.  You need to be in that &quot;Where to build
</span><br>
<span class="quotelev2">&gt;&gt; the binaries&quot; directory as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To use Visual Studio directly, start Visual Studio, and open the
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI.sln project file that's in your &quot;Where to build the binaries&quot;
</span><br>
<span class="quotelev2">&gt;&gt; directory.  In the Solution Explorer you'll see a list of sub-projects.
</span><br>
<span class="quotelev2">&gt;&gt;  Right-click the top heading: Solution 'Open MPI' and select Configuration
</span><br>
<span class="quotelev2">&gt;&gt; Manager.  You should get a window that says at the top Active Solution
</span><br>
<span class="quotelev2">&gt;&gt; Configuration, with Release below it.  If it says Debug, just change that to
</span><br>
<span class="quotelev2">&gt;&gt; Release and it will flip all the sub-projects over as well.  Note on the the
</span><br>
<span class="quotelev2">&gt;&gt; list of projects the INSTALL project will not be checked.  Check that now
</span><br>
<span class="quotelev2">&gt;&gt; and close the window.   Now right-click Solution 'Open MPI' again and hit
</span><br>
<span class="quotelev2">&gt;&gt; Build Solution.  It takes a while to compile everything.  If you get errors
</span><br>
<span class="quotelev2">&gt;&gt; about error code -31 and mt.exe at the end of the build, that's your virus
</span><br>
<span class="quotelev2">&gt;&gt; scanner locking the new exe/dll files and the install project complains.
</span><br>
<span class="quotelev2">&gt;&gt;  Keep right-clicking and Build Solution until it goes through.  The final
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI include files and binaries are in the
</span><br>
<span class="quotelev2">&gt;&gt; C:\Users\Alex's\Downloads......\installed directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS OpenMPI 1.4.2 doesn't have Fortran support on Windows.  You need the
</span><br>
<span class="quotelev2">&gt;&gt; dev 1.5 series for that and a Fortran compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/07/2010 11:35 AM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed a 90 day trial of Visual Studio 2008, and I am pretty sure I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am getting the exact same thing. The log and the picture are attached just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as last time. Any new ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13611.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13613.php">Damien Hocking: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
