<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 20:03:13 2010" -->
<!-- isoreceived="20101024000313" -->
<!-- sent="Sat, 23 Oct 2010 20:02:58 -0400" -->
<!-- isosent="20101024000258" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="9F4AC2D1-89C0-44BE-81B3-33FEB72F239C_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimiHViBkRqY9KtFaLjvO2GC2Crwip1jL+YV+jxC_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running simple MPI program<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 20:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brandon
<br>
<p>Yes, as others said and you figured, version is important, 
<br>
and installing from source is not hard, probably will save you more headaches than
<br>
installing the packages (which normally vary with the Linux distro version).
<br>
<p>Regarding the environment variables.
<br>
You need to set the PATH and the LD_LIBRARY_PATH to point to the newly 
<br>
installed-from-source OpenMPI bin and lib directories on *ALL* your home directories 
<br>
in ALL machines (assuming the home directory is not shared via  NFS or similar,
<br>
which I guess they aren't, based on what you said before).
<br>
<p>If you use csh/tcsh this means putting something like this in your .cshrc/.tcshrc file
<br>
(not a visible file, a &quot;dot&quot; file, you need &quot;ls -a&quot; to see it, if absent just create it):
<br>
<p>setenv PATH   /path/to/openmpi/bin:${PATH}
<br>
setenv LD_LIBRARY_PATH   /path/to/openmpi/lib
<br>
<p>If you use sh/bash the file is .bashrc or .profile and the style is like this:
<br>
<p>export PATH=/path/to/openmpi/bin:${PATH}
<br>
export LD_LIBRARY_PATH /path/to/openmpi/lib
<br>
<p>OpenMPI (I think, Jeff and others may correct me if I am wrong) ssh to each machine
<br>
and gets your environment variables that are local to each machine.  You need a 
<br>
mechanism (such as the above) to set the same environment  across the machines,
<br>
and to enable the OpenMPI stuff everywhere.
<br>
<p>I am not sure, but since you are using IP addresses, not host names,
<br>
your /etc/hosts file may be OK.
<br>
&nbsp;
<br>
I hope it helps.
<br>
<p>Gus Correa
<br>
<p>On Oct 23, 2010, at 3:10 PM, Brandon Fulcher wrote:
<br>
<p><span class="quotelev1">&gt; Hi, so yes I'm trying to install the source but after installing, it does not seem to be able to locate the libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun gives the error
</span><br>
<span class="quotelev1">&gt; libopen-rte.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, I have seen this faq <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But this is more than a little beyond me.  The libraries seem to be installed in usr/lib, (at least, that's where it locates the library in question.) but I can't seem to get this to work by modifying LD_LIBRARY_PATH, or using the --prefix switch.  Obviously I am doing something very wrong, never having bothered with editing paths before. (This is why I use packages.)  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Oct 23, 2010 at 1:47 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 23 Oct 2010, at 17:58, Brandon Fulcher wrote:
</span><br>
<span class="quotelev2">&gt; &gt; So I checked the OMPI package details on both machines, they each are running Open MPI 1.3. . . but then I noticed that the packages are different versions.   Basically, the slave is running the previous Ubuntu release, and the master is running the current one. Both have the most recent packages for their release. . .but perhaps that is enough of a difference?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to have exactly the same version of OpenMPI installed on both machines.  Typically in a cluster all machines are identical in terms of software, if this isn't the case for your systems then the easiest way might be to compile open mpi from source (on the older of the two machines would be best) and to install it to a common directory on both machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14580.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
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
