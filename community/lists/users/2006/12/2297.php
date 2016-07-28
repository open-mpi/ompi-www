<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  5 12:02:54 2006" -->
<!-- isoreceived="20061205170254" -->
<!-- sent="Tue, 05 Dec 2006 12:02:47 -0500" -->
<!-- isosent="20061205170247" -->
<!-- name="Katherine Holcomb" -->
<!-- email="kholcomb_at_[hidden]" -->
<!-- subject="[OMPI users] Any known issues with ksh?" -->
<!-- id="1165338167.2410.119.camel_at_shavano.itc.virginia.edu" -->
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
<strong>From:</strong> Katherine Holcomb (<em>kholcomb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-05 12:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2298.php">Ralph H Castain: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Previous message:</strong> <a href="2296.php">Jeff Squyres: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2298.php">Ralph H Castain: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Reply:</strong> <a href="2298.php">Ralph H Castain: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Reply:</strong> <a href="2300.php">Rainer Keller: "Re: [OMPI users] Any known issues with ksh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are in the process of converting our clusters from MPICH to OpenMPI
<br>
and have encountered some odd problems.  For historical reasons, the
<br>
default shell we install for users is ksh.  The --profile option to
<br>
mpirun does not work for our users under ksh.  We are unsure why
<br>
although our system administrator believes that OpenMPI may be making
<br>
the ksh on the remote nodes believe that it's a login shell.  We've
<br>
tried both rsh and ssh.  Has anybody seen anything like this?  
<br>
<p>There are no problems at all under bash.  (I use bash and I had no
<br>
trouble, but then started switching some users who were having MPICH
<br>
problems and they could not get it to work unless they changed to bash.)
<br>
<p><pre>
-- 
Katherine Holcomb, Ph.D.                kholcomb_at_[hidden]
Research Computing Support Group - ITC  Office Phone: (434) 982-5948
148 BSEL, Clark Hall                    Center Phone: (434) 243-8799
University of Virginia 22904            
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2298.php">Ralph H Castain: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Previous message:</strong> <a href="2296.php">Jeff Squyres: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2298.php">Ralph H Castain: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Reply:</strong> <a href="2298.php">Ralph H Castain: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Reply:</strong> <a href="2300.php">Rainer Keller: "Re: [OMPI users] Any known issues with ksh?"</a>
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
