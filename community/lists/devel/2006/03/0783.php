<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 08:49:48 2006" -->
<!-- isoreceived="20060331134948" -->
<!-- sent="Fri, 31 Mar 2006 08:49:46 -0500" -->
<!-- isosent="20060331134946" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="CA0DA839-294F-49E2-8E4A-BD6275186D1C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060331084411.GA12470_at_ipc256.inf.uni-jena.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 08:49:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0782.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0794.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2006, at 3:44 AM, Christian Kauhaus wrote:
<br>
<p><span class="quotelev1">&gt; first I'd like to introduce myself. I'm Christian Kauhaus and I am
</span><br>
<span class="quotelev1">&gt; currently working at the Department of Computer Architecture at the
</span><br>
<span class="quotelev1">&gt; University of Jena (Germany). Our work group is digging into how to
</span><br>
<span class="quotelev1">&gt; connect several clusters on a campus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As part of our research, we'd like to evaluate the use of IPv6 for
</span><br>
<span class="quotelev1">&gt; multi-cluster coupling. Therefore, we need to run OpenMPI over TCP/ 
</span><br>
<span class="quotelev1">&gt; IPv6.
</span><br>
<span class="quotelev1">&gt; Last year during EuroPVM/MPI I already had a short chat with Jeff
</span><br>
<span class="quotelev1">&gt; Squyres about this, but now we actually do have the time to work on
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<p>Great!  We currently only have IPv4 support, but IPv6 has always been  
<br>
on the wishlist.  Most of the developers in the States don't have  
<br>
access to IPv6 networks, so it hasn't been a concern / need that  
<br>
we've had time to address at this point.  It would be great if  
<br>
someone else could take a stab at it.
<br>
<p><span class="quotelev1">&gt; First we are interested to integrate IPv6 support into the tcp btl.  
</span><br>
<span class="quotelev1">&gt; Does
</span><br>
<span class="quotelev1">&gt; anyone know if there is someone already working on this? If yes, we
</span><br>
<span class="quotelev1">&gt; would be glad to cooperate. If no, we would start it by ourselves,
</span><br>
<span class="quotelev1">&gt; although we would need some help from the OpenMPI developer community
</span><br>
<span class="quotelev1">&gt; regarding OpenMPI / ORTE internals.
</span><br>
<p>As far as I'm aware, there is no one working on IPv6 support for Open  
<br>
MPI.  We would welcome anyone willing to work on the support :).  And  
<br>
we'll be as responsive as possible to requests for help / advice -  
<br>
this list is the best forum for that type of discussion.
<br>
<p>Are your hosts configured for both IPv4 and IPv6 traffic (or are they  
<br>
IPv6 only)?  I ask because that will determine what your first step  
<br>
is.  There are two TCP communication channels in Open MPI -- the tcp  
<br>
oob component, used by the run-time layer for out-of-band  
<br>
communication and the tcp btl component, used by the MPI layer for  
<br>
MPI traffic.  Without a working tcp oob component, it's pretty close  
<br>
to impossible to start the tcp btl, so if you only have IPv6 on your  
<br>
machines, that will dictate starting with the tcp oob component.   
<br>
Otherwise, you could start with either component (although both will  
<br>
eventually need to be updated).
<br>
<p>The oob tcp component (code is in orte/mca/oob/tcp/) is fairly  
<br>
straight-forward, especially if all you need to deal with is  
<br>
connection setup.  There are really two pieces to be aware of - in  
<br>
oob_tcp.c there is some code dealing with uri strings - this is used  
<br>
by the upper layers to ask the oob component for it's contact address  
<br>
(as a uri string) and to give the oob component a uri string and  
<br>
associate it with an orte_process_name.  The peer connection code is  
<br>
in a combination of oob_tcp_peer.[h,c] and oob_tcp_addr.[h,c].  I'm  
<br>
sure you will have to modify oob_tcp_addr.[h,c], and I think you'll  
<br>
probably have to modify oob_tcp_peer.[c,h] as well.
<br>
<p>I should diverge for a second...  Every process in Open MPI has an  
<br>
orte_process_name.  This value will be unique between processes that  
<br>
can connect to each other.  When I want to send an out of band  
<br>
message to a remote host, I send to that orte_process_name and the  
<br>
communication layer figures out how to get the message over there.   
<br>
So if the upper layers associate an orte_process_name with a uri  
<br>
string, you'll use that information to contact that  
<br>
orte_process_name, should you ever need to send data that way.
<br>
<p>The tcp btl is mostly the same type of thing.  The main difference is  
<br>
how peers are setup.  Instead of a char string to share endpoint  
<br>
connections, we have what we call the &quot;modex&quot;.  This is basically a  
<br>
one-time write, many time read global data store.  So the tcp btl  
<br>
puts a fixed-size structure into the modex data (behind the scenes,  
<br>
this is stored in our gpr data store), and each process in the  
<br>
universe can get that data by looking up against it's process name  
<br>
(actually, in this case, it's a datastructure called the ompi_proc,  
<br>
which is an orte_process_name, plus data needed for each MPI  
<br>
process).  So we'd need to extend that datastructure out a little bit  
<br>
to be able to support either IPv4 or IPv6 addresses.  From there, it  
<br>
would be the usual changes during connection setup issue.
<br>
<p>This was a fairly simple overview - I'd recommend starting with the  
<br>
tcp oob component and asking when you have questions about what you  
<br>
see.  You don't need to run Open MPI jobs to test the tcp oob  
<br>
component - you can just use orterun to launch normal old unix  
<br>
commands.  Something with a bit of stdio output will give a  
<br>
reasonable first test of the oob.  I usually do something like:
<br>
<p>&nbsp;&nbsp;&nbsp;orterun -np 2 -host host_a,host_b ls -l $HOME
<br>
<p>as I have enough files in my home directory that a page or two of  
<br>
standard I/O should be returned.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0782.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0788.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0794.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
