<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 13:05:27 2014" -->
<!-- isoreceived="20141113180527" -->
<!-- sent="Thu, 13 Nov 2014 13:05:16 -0500" -->
<!-- isosent="20141113180516" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="5464F2DC.5000600_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B3F1556C-DFC0-4E80-9701-28B2D6A5189B_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 13:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25805.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25803.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25799.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25762.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti
<br>
<p>See below, please.
<br>
<p>On 11/13/2014 07:19 AM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 13.11.2014 um 02:59 schrieb Gus Correa:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/12/2014 05:45 PM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 12.11.2014 um 17:27 schrieb Reuti:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another thing you can do is (a) ensure you built with &#151;enable-debug,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then (b) run it with -mca oob_base_verbose 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (without the tcp_if_include option) so we can watch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the connection handshake and see what it is doing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &#151;hetero-nodes will have not affect here and can be ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Done. It really tries to connect to the outside
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface of the headnode. But being there a firewall or not:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the nodes have no clue how to reach 137.248.0.0 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they have no gateway to this network at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to revert this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They think that there is a gateway although it isn't.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I remove the entry by hand for the gateway in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; routing table it starts up instantly too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While I can do this on my own cluster I still have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30 seconds delay on a cluster where I'm not root,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while this can be because of the firewall there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The gateway on this cluster is indeed going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the outside world.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Personally I find this behavior a little bit too aggressive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use all interfaces. If you don't check this carefully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beforehand and start a long running application one might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even not notice the delay during the startup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You could use the mca parameter file
</span><br>
<span class="quotelev2">&gt;&gt; (say, $prefix/etc/openmpi-mca-params.conf) to configure cluster-wide
</span><br>
<span class="quotelev2">&gt;&gt; the oob (and btl) interfaces to be used.
</span><br>
<span class="quotelev2">&gt;&gt; The users can still override your choices if they want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just put a line like this in openmpi-mca-params.conf :
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_if_include=192.168.154.0/26
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (and similar for btl_tcp_if_include, btl_openib_if_include).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Get a full list from &quot;ompi_info --all --all |grep if_include&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See these FAQ:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compute nodes tend to be multi-homed, so what criterion would OMPI use
</span><br>
<span class="quotelev2">&gt;&gt; to select one interface among many,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My compute nodes are having two interfaces:
</span><br>
<span class="quotelev1">&gt; one for MPI (and the low ssh/SGE traffic to start processes somewhere)
</span><br>
<span class="quotelev1">&gt; and one for NFS to transfer files from/to the file server.
</span><br>
<span class="quotelev1">&gt; So: Open MPI may use both interfaces without telling me anything about it?
</span><br>
<span class="quotelev1">&gt; How will it split the traffic? 50%/50%?
</span><br>
<p>Honestly, I don't know.
<br>
My suggestion is to pick the interface you really want via mca parameters.
<br>
Not sure if there is a way to make OMPI report what it is doing in this 
<br>
regard when many interfaces are available.
<br>
<p>Ralph, Jeff, OMPI experts:
<br>
<p>If we write -mca btl_tcp_if_include eth0,eth1
<br>
will the interface order (eth0,eth1 as opposed to eth1,eth0) have any 
<br>
impact on how they are used by OMPI.
<br>
If we don't write anything, will OMPI somehow select and use the fastest?
<br>
Will it drop the slowest or the slower ones?
<br>
How will it split the traffic?
<br>
<p><p><span class="quotelev1">&gt; When there is a heavy file transfer on the NFS interface:
</span><br>
<span class="quotelev1">&gt; might it hurt Open MPI's communication or will it balance the usage on-the-fly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I prefer to separate the two traffic lanes.
<br>
NFS has been by far a much more frequent source
<br>
of trouble than (Open)MPI.
<br>
Hence, I setup the mca parameter file to use the IB interface (&quot;openib&quot; 
<br>
and &quot;sm&quot; - which is now &quot;vader&quot; after 1.8.X- and &quot;self&quot;) for btl (I 
<br>
didn't bother to set it for oob), and mount NFS on Ethernet
<br>
I tried NFS4 over rdma and over IPoIB and the results weren't so good.
<br>
I didn't have much time to test/experiment (NFSv3 etc), so moved to 
<br>
production that way.
<br>
<p><span class="quotelev1">&gt; When I prepare a machinefile with the name of the interfaces
</span><br>
(or get the names from SGE's PE_HOSTFILE) it should use just this 
<br>
(except native IB),
<br>
and not looking around for other paths to the other machine(s) (IMO).
<br>
<p>Normally I don't handcraft the machine file, just use what the resource
<br>
manager gives (Torque in my case).
<br>
Some programs (say MPMD) require handcrafting (or using the mpiexec
<br>
<p>Based on your other emails to Ralph, I believe we are talking about two 
<br>
end members in the way the interfaces are picked:
<br>
<p>1) The current OMPI approach: In principle use everything, and let you 
<br>
(and/or the user) re-configure it with mca parameters (in gazillions of
<br>
different ways, very flexible) to fit your computer configuration and
<br>
needs.
<br>
<p>I do like this, because I guess it would be very difficult for OMPI to 
<br>
make a specific interface choice (and get it right) not knowing
<br>
the details of your network setup, name resolution, etc.
<br>
[Just see the NFS vs. MPI networks that you, me, and others have.]
<br>
<p>Also, you can simply use the mca parameter configuration file to your
<br>
advantage, and to fine tune everything to your clusters.
<br>
Still, power users can override your settings if they need, bu using
<br>
their own .opempi mca configuration files, or environment variables,
<br>
or mpiexec mca command line options.
<br>
<p>2) What you seem to be proposing  which is to use whatever IP address 
<br>
that resolves to the host names in the hostfile (handcrafted, given by
<br>
the RM, or on the fly via --hosts option), or the IP themselves instead 
<br>
of names.
<br>
[I hope I understood you right and did not misrepresent what you said.]
<br>
<p>I confess I don't see this as an advantage.
<br>
It is unlikely that your hostnames resolve to the right interface that 
<br>
you want to use for MPI (and actually your and my IB interfaces do *not* 
<br>
resolve to the target IP/inteface, it is the Ethernet that does resolve 
<br>
this way, and you don't want to use Ethernet for MPI).
<br>
<p><p>Therefore different interfaces have different names in my setup.
<br>
&quot;node01&quot; is just eth0 and different from &quot;node01-nfs&quot; for eth1.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; not knowing beforehand what exists in a particular computer?
</span><br>
<span class="quotelev2">&gt;&gt; There would be a risk to make a bad choice.
</span><br>
<span class="quotelev2">&gt;&gt; The current approach gives you everything, and you
</span><br>
<span class="quotelev2">&gt;&gt; pick/select/restrict what you want to fit your needs,
</span><br>
<span class="quotelev2">&gt;&gt; with mca parameters (which can be set in several
</span><br>
<span class="quotelev2">&gt;&gt; ways and with various scopes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think this bad.
</span><br>
<span class="quotelev2">&gt;&gt; However, I am biased about this.
</span><br>
<span class="quotelev2">&gt;&gt; I like and use the openmpi-mca-params.conf file
</span><br>
<span class="quotelev2">&gt;&gt; to setup sensible defaults.
</span><br>
<span class="quotelev2">&gt;&gt; At least I think they are sensible. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that this can be prepared for all users this way.
</span><br>
<span class="quotelev1">&gt; Whenever they use my installed version it will work -
</span><br>
<span class="quotelev1">&gt; maybe I have to investigate on some other clusters where
</span><br>
<span class="quotelev1">&gt; I'm not root what to enter there, but it can be done for sure.
</span><br>
<p>If you need to support OMPI users in clusters where you don't
<br>
have root access,
<br>
you can either ask the sysadmin to insert the mca configuration file in
<br>
the $OMPI/etc directory, or you can give to each user a tailored 
<br>
.openmpi file to put in their home directory.
<br>
There are certainly other ways also.
<br>
See the FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>IMHO, this mca parameter flexibility is really one of the big upsides of
<br>
OMPI.
<br>
<p>The downside may be that there are just gazillions of parameters,
<br>
and not nearly enough clarity (and documentation) on what one should do
<br>
to do to choose good values.
<br>
(I am struggling with the sm/vader parameters, parameters for 
<br>
collectives, etc).
<br>
However, for the network setup I think that is not so hard,
<br>
more or less straightforward once you know the cluster network details.
<br>
Ralph and Jeff will kill me for complaining about documentation for the
<br>
gazillionth time ...
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BUT: it may be a rare situation that a group for quantum chemistry
</span><br>
<span class="quotelev1">&gt; is having a sysadmin on their own taking care of the clusters and
</span><br>
<span class="quotelev1">&gt; the well behaving operation of the installed software, being it
</span><br>
<span class="quotelev1">&gt; applications or libraries. Often any PhD student in other groups
</span><br>
<span class="quotelev1">&gt; will get a side project: please install software XY for the group.
</span><br>
<span class="quotelev1">&gt; They are chemists and want to get the software running -
</span><br>
<span class="quotelev1">&gt; they are no experts of Open MPI*.
</span><br>
<p>We have atmosphere/ocean/climate science folks here,
<br>
but that is where the differences stop.
<br>
They are certainly not MPI experts (and not much interested in those 
<br>
details).
<br>
So, that is why providing a set of sensible defaults is a good thing.
<br>
<p>Or perhaps, if needed, you can think of a set of defaults depending on 
<br>
the application (and distribute them via the MCA aggregate parameters 
<br>
(same FAQ):
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p><p><span class="quotelev1">&gt;They don't care for a tight integration or using the correct interfaces as
</span><br>
<span class="quotelev1">&gt; long as the application delivers the results in the end. For example: ORCA**.
</span><br>
<span class="quotelev1">&gt; It's necessary for the users of the software to install a shared library of
</span><br>
<span class="quotelev1">&gt; Open MPI in a specific version. I see in the ORCA*** forum that many
</span><br>
<span class="quotelev1">&gt; struggle with it to compile a shared library version of Open MPI and
</span><br>
<span class="quotelev1">&gt; have access to it during execution, i.e. how to set LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; that it's known on the slaves. The cluster admins are in another
</span><br>
<span class="quotelev1">&gt; department and refuse to make any special arrangements for a
</span><br>
<span class="quotelev1">&gt; single group sometimes.
</span><br>
<p>Fortunately, I don't have these political boundaries in the clusters I 
<br>
oversee.
<br>
We provide as much as we can in terms of builds of OMPI and other 
<br>
libraries, and make them available through enviroment modules.
<br>
I guess this is pretty much what you and many others do,
<br>
along with Wikis or README files on how to do basic stuff,
<br>
or compile and run the most popular programs.
<br>
<p>However, in the university-wide cluster the situation is similar to what
<br>
you describe, and there is a lot of user disappointment with that.
<br>
I such situations, I've seen people installing OpenMPI in their home 
<br>
directory, etc.
<br>
You could try to do this for the users, but that is a bit of an insane 
<br>
job, too much work spread across many users.
<br>
However,
<br>
quite frankly I think that is this is cluster sysadmin duty, too bad if 
<br>
the &quot;other department&quot; fellows don't consider that a service too the users.
<br>
<p><span class="quotelev1">&gt; And as ORCA calls `mpiexec` several
</span><br>
<span class="quotelev1">&gt; times during one job, the delay could occur several times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If it is in a cluster that you don't have control of, give the users a
<br>
.openmpi/mca-params.conf file.
<br>
That may help.
<br>
<p><span class="quotelev1">&gt; On some other clusters that we have access to, the admins prepare
</span><br>
<span class="quotelev1">&gt; Open MPI installations accessible by `modules`. But often not for the
</span><br>
<span class="quotelev1">&gt; required combination of Open MPI and compiler type and version which is needed.
</span><br>
<p>I understand the problem, but if you cannot convince the sys admins to 
<br>
build OMPI and other libraries needed, the only way to solve the problem
<br>
is to teach users to install OMPI in their own home directories 
<br>
(assuming it is mounted cluster-wide).
<br>
Or do it for them.
<br>
<p><span class="quotelev1">&gt; If a software vendor suggests to use compiler X in version Y it's the best to
</span><br>
<span class="quotelev1">&gt; follow that approach as it will generate less issues which might need to be
</span><br>
<span class="quotelev1">&gt; investigated - i.e. numerical variations as different compilers optimize in a
</span><br>
<span class="quotelev1">&gt; different way. Hence you end up to compile the necessary Open MPI on your own
</span><br>
<span class="quotelev1">&gt; again and set again sensible defaults as you lay out above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We have to build many combinations with different compilers also.
<br>
Some programs only compile with Intel, others with PGI, a few are kind
<br>
enough to compile with gfortran, and it is not only OMPI, but other 
<br>
libraries as well (HDF5, NetCDF, etc).
<br>
One sticking point is that Fortran &gt;90 modules are not compatible across 
<br>
compilers.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; Continued in 2nd email...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) Sure, there are exceptions and experts too -
</span><br>
<span class="quotelev1">&gt; I don't intend to offend anyone by this statement.
</span><br>
<span class="quotelev1">&gt; But I speak for the groups of QC I have had contact
</span><br>
<span class="quotelev1">&gt; to in the last couple of years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **) <a href="http://www.cec.mpg.de/forum/portal.php">http://www.cec.mpg.de/forum/portal.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***) The current ORCA needs 1.6.5, but it may change in one point in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It tries so independent from the internal or external name of the headnode
</span><br>
<span class="quotelev2">&gt;&gt; given in the machinefile - I hit ^C then.
</span><br>
<span class="quotelev2">&gt;&gt; I attached the output of Open MPI 1.8.1 for this setup too.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25781.php">http://www.open-mpi.org/community/lists/users/2014/11/25781.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25784.php">http://www.open-mpi.org/community/lists/users/2014/11/25784.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25799.php">http://www.open-mpi.org/community/lists/users/2014/11/25799.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25805.php">Emmanuel Thomé: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25803.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25799.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25762.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
