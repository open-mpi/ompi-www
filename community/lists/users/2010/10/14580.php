<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 22:57:42 2010" -->
<!-- isoreceived="20101024025742" -->
<!-- sent="Sat, 23 Oct 2010 21:57:34 -0500" -->
<!-- isosent="20101024025734" -->
<!-- name="Brandon Fulcher" -->
<!-- email="minguo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="AANLkTimg8xSWKT360=PH8g1z78fim3a7bJtn+y0H+4Ub_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F4AC2D1-89C0-44BE-81B3-33FEB72F239C_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Brandon Fulcher (<em>minguo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 22:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14581.php">Jack Bryan: "[OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gustavo, I have managed to get it working now.
<br>
<p>The problem was indeed the difference between Ubuntu Packages, ( I assume
<br>
so.) and after figuring out the PATH mess it runs and communicates well.
<br>
<p>Thank you so much for the help!
<br>
<p>On Sat, Oct 23, 2010 at 7:02 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brandon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, as others said and you figured, version is important,
</span><br>
<span class="quotelev1">&gt; and installing from source is not hard, probably will save you more
</span><br>
<span class="quotelev1">&gt; headaches than
</span><br>
<span class="quotelev1">&gt; installing the packages (which normally vary with the Linux distro
</span><br>
<span class="quotelev1">&gt; version).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the environment variables.
</span><br>
<span class="quotelev1">&gt; You need to set the PATH and the LD_LIBRARY_PATH to point to the newly
</span><br>
<span class="quotelev1">&gt; installed-from-source OpenMPI bin and lib directories on *ALL* your home
</span><br>
<span class="quotelev1">&gt; directories
</span><br>
<span class="quotelev1">&gt; in ALL machines (assuming the home directory is not shared via  NFS or
</span><br>
<span class="quotelev1">&gt; similar,
</span><br>
<span class="quotelev1">&gt; which I guess they aren't, based on what you said before).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use csh/tcsh this means putting something like this in your
</span><br>
<span class="quotelev1">&gt; .cshrc/.tcshrc file
</span><br>
<span class="quotelev1">&gt; (not a visible file, a &quot;dot&quot; file, you need &quot;ls -a&quot; to see it, if absent
</span><br>
<span class="quotelev1">&gt; just create it):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv PATH   /path/to/openmpi/bin:${PATH}
</span><br>
<span class="quotelev1">&gt; setenv LD_LIBRARY_PATH   /path/to/openmpi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use sh/bash the file is .bashrc or .profile and the style is like
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/path/to/openmpi/bin:${PATH}
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH /path/to/openmpi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI (I think, Jeff and others may correct me if I am wrong) ssh to each
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev1">&gt; and gets your environment variables that are local to each machine.  You
</span><br>
<span class="quotelev1">&gt; need a
</span><br>
<span class="quotelev1">&gt; mechanism (such as the above) to set the same environment  across the
</span><br>
<span class="quotelev1">&gt; machines,
</span><br>
<span class="quotelev1">&gt; and to enable the OpenMPI stuff everywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure, but since you are using IP addresses, not host names,
</span><br>
<span class="quotelev1">&gt; your /etc/hosts file may be OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2010, at 3:10 PM, Brandon Fulcher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, so yes I'm trying to install the source but after installing, it does
</span><br>
<span class="quotelev1">&gt; not seem to be able to locate the libraries.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun gives the error
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte.so.0: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, I have seen this faq
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But this is more than a little beyond me.  The libraries seem to be
</span><br>
<span class="quotelev1">&gt; installed in usr/lib, (at least, that's where it locates the library in
</span><br>
<span class="quotelev1">&gt; question.) but I can't seem to get this to work by modifying
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, or using the --prefix switch.  Obviously I am doing
</span><br>
<span class="quotelev1">&gt; something very wrong, never having bothered with editing paths before. (This
</span><br>
<span class="quotelev1">&gt; is why I use packages.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Oct 23, 2010 at 1:47 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 23 Oct 2010, at 17:58, Brandon Fulcher wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So I checked the OMPI package details on both machines, they each are
</span><br>
<span class="quotelev1">&gt; running Open MPI 1.3. . . but then I noticed that the packages are different
</span><br>
<span class="quotelev1">&gt; versions.   Basically, the slave is running the previous Ubuntu release, and
</span><br>
<span class="quotelev1">&gt; the master is running the current one. Both have the most recent packages
</span><br>
<span class="quotelev1">&gt; for their release. . .but perhaps that is enough of a difference?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You need to have exactly the same version of OpenMPI installed on both
</span><br>
<span class="quotelev1">&gt; machines.  Typically in a cluster all machines are identical in terms of
</span><br>
<span class="quotelev1">&gt; software, if this isn't the case for your systems then the easiest way might
</span><br>
<span class="quotelev1">&gt; be to compile open mpi from source (on the older of the two machines would
</span><br>
<span class="quotelev1">&gt; be best) and to install it to a common directory on both machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ashley.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14581.php">Jack Bryan: "[OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14579.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
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
