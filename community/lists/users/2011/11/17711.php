<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 18:11:58 2011" -->
<!-- isoreceived="20111104221158" -->
<!-- sent="Fri, 04 Nov 2011 16:11:41 -0600" -->
<!-- isosent="20111104221141" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB27C54CEB1F_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F3E4654B-E00F-4087-8C35-C3DF1D2B26B5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 18:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17712.php">Charles Shelor: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>In reply to:</strong> <a href="17705.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph, 
<br>
<p><span class="quotelev1">&gt; Having a local /tmp is typically required by Linux for proper operation as the OS itself needs to ensure its usage is protected, as was &gt; previously stated and is reiterated in numerous books on managing Linux systems. 
</span><br>
<p>There is a /tmp, but it's not local.  I don't know if that passes muster as a proper setup or not.  I'll gift a Linux book for Christmas to the two reputable vendors who have configured diskless clusters for us where /tmp was not local, and both /usr/tmp and /var/tmp were linked to /tmp. :)
<br>
<p><span class="quotelev1">&gt; IMO, discussions of how to handle /tmp on diskless systems goes beyond the bounds of OMPI - it is a Linux system management issue that &gt; is covered in depth by material on that subject. Explaining how the session directory is used, and why we now include a test and warning if the session directory is going to land on a networked file system (pretty sure this is now in the 1.5 series, but certainly is &gt; in the trunk for future releases), would be reasonable.
</span><br>
<p>I know where you're coming from, and I probably didn't title the post correctly because I wasn't sure what to ask.  But I definitely saw it, and still see it, as an OpenMPI issue.  Having /tmp mounted over NFS on a stateless cluster is not a broken configuration, broadly speaking. The vendors made those decisions and presumably that's how they do it for other customers as well. There are two other (Platform/HP) MPI applications that apparently work normally. But OpenMPI doesn't work normally. So it's deficient.
<br>
<p>I'll ask the vendor to rebuild the stateless image with a /usr/tmp partition so that the end-user application in question can then set orte_tmpdir_base to /usr/tmp and all will then work beautifully...
<br>
<p>Thanks again,
<br>
<p>Ed
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17712.php">Charles Shelor: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>In reply to:</strong> <a href="17705.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
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
