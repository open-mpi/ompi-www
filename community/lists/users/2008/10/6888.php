<?
$subject_val = "Re: [OMPI users] Problem launching onto Bourne shell";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 16:28:00 2008" -->
<!-- isoreceived="20081007202800" -->
<!-- sent="Tue, 7 Oct 2008 16:19:33 -0400" -->
<!-- isosent="20081007201933" -->
<!-- name="Hahn Kim" -->
<!-- email="hgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching onto Bourne shell" -->
<!-- id="8E1DA168-D654-45CC-8EF2-2A4A795BB323_at_ll.mit.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="244D3491-05CD-4B6B-8F36-794AA6BAD89B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem launching onto Bourne shell<br>
<strong>From:</strong> Hahn Kim (<em>hgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 16:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6887.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6887.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; you probably want to set the LD_LIBRARY_PATH (and PATH, likely, and  
</span><br>
<span class="quotelev1">&gt; possibly others, such as that LICENSE key, etc.) regardless of  
</span><br>
<span class="quotelev1">&gt; whether it's an interactive or non-interactive login.
</span><br>
<p><p>Right, that's exactly what I want to do.  I was hoping that mpirun  
<br>
would run .profile as the FAQ page stated, but the -x fix works for now.
<br>
<p>I just realized that I'm using .bash_profile on the x86 and need to  
<br>
move its contents into .bashrc and call .bashrc from .bash_profile,  
<br>
since eventually I will also be launching MPI jobs onto other x86  
<br>
processors.
<br>
<p>Thanks to everyone for their help.
<br>
<p>Hahn
<br>
<p>On Oct 7, 2008, at 2:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 7, 2008, at 12:48 PM, Hahn Kim wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding 1., we're actually using 1.2.5.  We started using Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; last winter and just stuck with it.  For now, using the -x flag with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun works.  If this really is a bug in 1.2.7, then I think we'll
</span><br>
<span class="quotelev2">&gt;&gt; stick with 1.2.5 for now, then upgrade later when it's fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like this behavior has been the same throughout the entire
</span><br>
<span class="quotelev1">&gt; 1.2 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding 2., are you saying I should run the commands you suggest
</span><br>
<span class="quotelev2">&gt;&gt; from the x86 node running bash, so that ssh logs into the Cell node
</span><br>
<span class="quotelev2">&gt;&gt; running Bourne?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm saying that if &quot;ssh othernode env&quot; gives different answers than
</span><br>
<span class="quotelev1">&gt; &quot;ssh othernode&quot;/&quot;env&quot;, then your .bashrc or .profile or whatever is
</span><br>
<span class="quotelev1">&gt; dumping out early depending on whether you have an interactive login
</span><br>
<span class="quotelev1">&gt; or not.  This is the real cause of the error -- you probably want to
</span><br>
<span class="quotelev1">&gt; set the LD_LIBRARY_PATH (and PATH, likely, and possibly others, such
</span><br>
<span class="quotelev1">&gt; as that LICENSE key, etc.) regardless of whether it's an interactive
</span><br>
<span class="quotelev1">&gt; or non-interactive login.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run &quot;ssh othernode env&quot; from the x86 node, I get the
</span><br>
<span class="quotelev2">&gt;&gt; following vanilla environment:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; USER=ha17646
</span><br>
<span class="quotelev2">&gt;&gt; HOME=/home/ha17646
</span><br>
<span class="quotelev2">&gt;&gt; LOGNAME=ha17646
</span><br>
<span class="quotelev2">&gt;&gt; SHELL=/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; PWD=/home/ha17646
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run &quot;ssh othernode&quot; from the x86 node, then run &quot;env&quot; on the
</span><br>
<span class="quotelev2">&gt;&gt; Cell, I get the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; USER=ha17646
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev2">&gt;&gt; HOME=/home/ha17646
</span><br>
<span class="quotelev2">&gt;&gt; MCS_LICENSE_PATH=/opt/MultiCorePlus/mcf.key
</span><br>
<span class="quotelev2">&gt;&gt; LOGNAME=ha17646
</span><br>
<span class="quotelev2">&gt;&gt; TERM=xterm-color
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/usr/local/bin:/usr/bin:/sbin:/bin:/tools/openmpi-1.2.5/bin:/
</span><br>
<span class="quotelev2">&gt;&gt; tools/cmake-2.4.7/bin:/tools
</span><br>
<span class="quotelev2">&gt;&gt; SHELL=/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; PWD=/home/ha17646
</span><br>
<span class="quotelev2">&gt;&gt; TZ=EST5EDT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hahn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 7, 2008, at 12:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph and I just talked about this a bit:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. In all released versions of OMPI, we *do* source the .profile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the target node if it exists (because vanilla Bourne shells do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source anything on remote nodes -- Bash does, though, per the FAQ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, looking in 1.2.7, it looks like it might not be executing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that code -- there *may* be a bug in this area.  We're checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. You might want to check your configuration to see if your .bashrc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is dumping out early because it's a non-interactive shell.  Check  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output of:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh othernode env
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh othernode
</span><br>
<span class="quotelev3">&gt;&gt;&gt; env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e., a non-interactive running of &quot;env&quot; vs. an interactive login
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running &quot;env&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 7, 2008, at 8:53 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am unaware of anything in the code that would &quot;source .profile&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for you. I believe the FAQ page is in error here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 6, 2008, at 7:47 PM, Hahn Kim wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Great, that worked, thanks!  However, it still concerns me that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FAQ page says that mpirun will execute .profile which doesn't seem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to work for me.  Are there any configuration issues that could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possibly be preventing mpirun from doing this?  It would certainly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be more convenient if I could maintain my environment in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; single .profile file instead of adding what could potentially be a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lot of -x arguments to my mpirun command.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hahn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 6, 2008, at 5:44 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tYou can forward your local env with mpirun -x LD_LIBRARY_PATH.  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; alternative you can set specific values with mpirun -x
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/some/where:/some/where/else . More information
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --help (or man mpirun).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 6 oct. 08 &#224; 16:06, Hahn Kim a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm having difficulty launching an Open MPI job onto a machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is running the Bourne shell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's my basic setup.  I have two machines, one is an x86-based
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; machine running bash and the other is a Cell-based machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bourne shell.  I'm running mpirun from the x86 machine, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; launches a C++ MPI application onto the Cell machine.  I get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error while loading shared libraries: libstdc++.so.6: cannot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; open
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The basic problem is that LD_LIBRARY_PATH needs to be set to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; directory that contains libstdc++.so.6 for the Cell.  I set the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; following line in .profile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; which is the path to the PPC libraries for Cell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now if I log directly into the Cell machine and run the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; directly from the command line, I don't get the above error.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun still fails, even after setting LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in .profile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As a sanity check, I did the following.  I ran the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from the x86 machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 1 --host cab0 env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; which, among others things, shows me the following value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/tools/openmpi-1.2.5/lib:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I log into the Cell machine and run env directly from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; line, I get the following value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So it appears that .profile gets sourced when I log in but not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, according to the OpenMPI FAQ (<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ), mpirun is supposed to directly call .profile since Bourne
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't automatically call it for non-interactive shells.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does anyone have any insight as to why my environment isn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; being
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; set properly?  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hahn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hahn Kim, hgk_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MIT Lincoln Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 244 Wood St., Lexington, MA 02420
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tel: 781-981-0940, Fax: 781-981-5255
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hahn Kim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MIT Lincoln Laboratory   Phone: (781) 981-0940
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 244 Wood Street, S2-252  Fax: (781) 981-5255
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lexington, MA 02420      E-mail: hgk_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hahn Kim, hgk_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; MIT Lincoln Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 244 Wood St., Lexington, MA 02420
</span><br>
<span class="quotelev2">&gt;&gt; Tel: 781-981-0940, Fax: 781-981-5255
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
Hahn Kim, hgk_at_[hidden]
MIT Lincoln Laboratory
244 Wood St., Lexington, MA 02420
Tel: 781-981-0940, Fax: 781-981-5255
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6887.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6887.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
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
