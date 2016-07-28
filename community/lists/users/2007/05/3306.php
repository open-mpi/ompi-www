<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 21:40:26 2007" -->
<!-- isoreceived="20070522014026" -->
<!-- sent="Mon, 21 May 2007 21:40:11 -0400" -->
<!-- isosent="20070522014011" -->
<!-- name="Tom Clune" -->
<!-- email="Thomas.L.Clune_at_[hidden]" -->
<!-- subject="[OMPI users] Weird interaction with modem under OS X" -->
<!-- id="EFAEF269-196C-44F1-9D71-BDC01EE95F11_at_nasa.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Tom Clune (<em>Thomas.L.Clune_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 21:40:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3307.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Previous message:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3307.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Reply:</strong> <a href="3307.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Maybe reply:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Executive summary: mpirun hangs when laptop is connected via cellular  
<br>
modem.
<br>
<p>Longer description: Under ordinary circumstances mpirun behaves as  
<br>
expected on my OS X (Intel-duo) laptop.  I only want to be using the  
<br>
shared-memory mechanism - i.e. not sending packets across any  
<br>
networks.   When my laptop is connected to the internet via ethernet  
<br>
or wireless (or not connected to the network at all) mpirun works  
<br>
just fine, but if I connect via my nifty new cellular modem (Verizon  
<br>
in case it matters), mpirun hangs at launch.  I.e. my application  
<br>
never even starts, and I have to use &lt;ctrl-z&gt; to interrupt to regain  
<br>
a prompt.   I'd like to be able to engage in other activities (mail,  
<br>
cvs, skype) while executing mpi code in the background, so I'm really  
<br>
hoping there is a simple switch to fix this.
<br>
<p>I am launching with the command:  &quot;mpirun -np 2 ./gx&quot;.   I have also  
<br>
tried &quot;mpirun --mca btl self,sm -np 2 ./gx&quot; but that did not seem to  
<br>
improve the situation.
<br>
<p>I have attached the output from &quot;ompi_info --all&quot;.  The output does  
<br>
not seem to depend on whether I am connected via the modem or not.
<br>
<p>Thanks in advance.
<br>
<p>- Tom
<br>
<p>&#239;&#191;&#188;
<br>
&#239;&#191;&#188;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3306/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3306/withModem">withModem</a>
</ul>
<!-- attachment="withModem" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3306/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>text/directory attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3306/Thomas_Clune.vcf">Thomas_Clune.vcf</a>
</ul>
<!-- attachment="Thomas_Clune.vcf" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3306/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3307.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Previous message:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3307.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Reply:</strong> <a href="3307.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Maybe reply:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
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
