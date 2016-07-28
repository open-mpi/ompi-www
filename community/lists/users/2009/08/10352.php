<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 12:22:45 2009" -->
<!-- isoreceived="20090813162245" -->
<!-- sent="Thu, 13 Aug 2009 09:22:39 -0700" -->
<!-- isosent="20090813162239" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="06A458B6-2DBA-482B-B2BB-4A007112D35A_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BB07634E-3443-4757-9ECA-987B8DB7E11F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-08-13 12:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10353.php">amjad ali: "[OMPI users] programming qsn??"</a>
<li><strong>Previous message:</strong> <a href="10351.php">Jeff Squyres: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10342.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10366.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10366.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2009, at  19:09 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...well, I'm going to ask our TCP friends for some help here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meantime, I do see one thing that stands out. Port 4 is an awfully  
</span><br>
<span class="quotelev1">&gt; low port number that usually sits in the reserved range. I checked  
</span><br>
<span class="quotelev1">&gt; the /etc/services file on my Mac, and it was commented out as  
</span><br>
<span class="quotelev1">&gt; unassigned, which should mean it was okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, that is an unusual number. The default minimum port number is  
</span><br>
<span class="quotelev1">&gt; 1024, so I'm puzzled how you wound up down there. Of course, could  
</span><br>
<span class="quotelev1">&gt; just be an error in the print statement, but let's try moving it to  
</span><br>
<span class="quotelev1">&gt; be safe? Set
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_tcp_port_min_v4 36900 -mca btl_tcp_port_range_v4 32
</span><br>
<span class="quotelev1">&gt; and see what happens.
</span><br>
<p>What happens is that everything works now!  Both connectivity_c and  
<br>
the MITgcm.  I haven't tried under torque yet, but lets declare an  
<br>
openMPI victory at this point.
<br>
<p>On Aug 13, 2009, at  8:28 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Agreed -- ports 4 and 260 should be in the reserved ports range.   
</span><br>
<span class="quotelev1">&gt; Are you running as root, perchance?
</span><br>
<p>Errrr, no, but yes.  My user account has admin privledges.  A sloppy  
<br>
workstation OS X habit I now regret propagating to my cluster. I'm  
<br>
sorry to not mention it earlier as possibly relevant.
<br>
<p>As a suggestion, btl_base_verbose could be mentioned as a good  
<br>
debugging tool in the troubleshooting section of the FAQ.  Its on the  
<br>
page to do with tcp, which I admit I should have read as soon as I  
<br>
realized there was a communication issue, but having it in the  
<br>
troubleshooting section would be helpful too.  i.e. maybe a more  
<br>
erudite version of:
<br>
<p>Checking connections between nodes:
<br>
<p>Sometimes the configuration of a cluster makes it impossible for nodes  
<br>
to communicate properly.  To debug this it helps to include  --mca  
<br>
btl_base_verbose 30 as a command line argument (see <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a> 
<br>
&nbsp;&nbsp;for more information).  The program example/connectivity_c.c is also  
<br>
a useful minimal program for testing communication on the cluster.
<br>
<p>Thanks again for everyone's help, particularly Ralph, Jeff and Gus.
<br>
<p>Cheers,  Jody
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10353.php">amjad ali: "[OMPI users] programming qsn??"</a>
<li><strong>Previous message:</strong> <a href="10351.php">Jeff Squyres: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10342.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10366.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10366.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
