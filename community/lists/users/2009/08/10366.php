<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 13:15:13 2009" -->
<!-- isoreceived="20090814171513" -->
<!-- sent="Fri, 14 Aug 2009 10:15:08 -0700" -->
<!-- isosent="20090814171508" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="60F581BE-25B9-4F7F-87AB-2139AE76243F_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="06A458B6-2DBA-482B-B2BB-4A007112D35A_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp connectivity OS X and 1.3.3<br>
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 13:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10367.php">George Bosilca: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
<li><strong>Previous message:</strong> <a href="10365.php">Warner Yuen: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>In reply to:</strong> <a href="10352.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10337.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Just to polish this thread off....
<br>
<p>To make openmpi work on my OS X 10.5 machine I need only:
<br>
<p>./configure --prefix=/Network/Xgrid/openmpi
<br>
make
<br>
make install
<br>
<p>I then edited
<br>
/Network/Xgrid/openmpi/etc/openmpi-mca-params.conf
<br>
and added
<br>
<p># set ports so that they are more valid than the default ones (see  
<br>
email from Ralph Castain)
<br>
btl_tcp_port_min_v4 = 36900
<br>
btl_tcp_port_range  = 32
<br>
<p>Which may be a kludge only I need because I am being silly and running  
<br>
openMPI as an admin-privileged user.
<br>
<p>For my environment, I don't *need* to set anything, though I find it  
<br>
useful to set:
<br>
<p>export PATH=&quot;/Network/Xgrid/openmpi/bin/:$PATH:/usr/local/bin:/usr/ 
<br>
local/sbin&quot;
<br>
export MANPATH=&quot;/Network/Xgrid/openmpi/man/:/usr/local/man/:$MANPATH&quot;
<br>
<p>Note that I do not think I need to set LD_LIBRARY_PATH (which I don't  
<br>
think OS X knows anything about anyway) nor DYLD_LIBRARY_PATH.  This  
<br>
is consistent with the FAQ that warns against setting those (though  
<br>
when I had them set there didn't seem to be any ill effects).
<br>
<p>I'm running a long job now under torque/pbs.  I'll see if it survives  
<br>
the weekend (I had trouble with XGrid jobs dying after 10 hours or so  
<br>
due to an sshd deciding it was a security breach and killing all the  
<br>
processes).
<br>
<p>Anyways, all seems to be working so far.  Sorry that my poor choice in  
<br>
user management caused so many mysteries.  Thanks for everyone's help.
<br>
<p>Cheers,  Jody
<br>
<p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10367.php">George Bosilca: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
<li><strong>Previous message:</strong> <a href="10365.php">Warner Yuen: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>In reply to:</strong> <a href="10352.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10337.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
