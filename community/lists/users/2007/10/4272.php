<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 21:35:42 2007" -->
<!-- isoreceived="20071023013542" -->
<!-- sent="Mon, 22 Oct 2007 22:35:36 -0300" -->
<!-- isosent="20071023013536" -->
<!-- name="Lourival Mendes" -->
<!-- email="mendes.lourival_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pascal Interface for OpenMPI" -->
<!-- id="2855721b0710221835n2d85ed21j97200c6070d0e79_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F5CC2D89-EC4A-40AD-9E52-04AC89992B74_at_cisco.com" -->
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
<strong>From:</strong> Lourival Mendes (<em>mendes.lourival_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 21:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>In reply to:</strong> <a href="4268.php">Jeff Squyres: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4274.php">Daniël Mantione: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for your comments Jeff..
<br>
<p>I will try some of your advices.. and further I will let you know... in the
<br>
mean time we can try at least to convince the old school of MPIers to
<br>
include the Pascal interface... :)
<br>
<p>Best regards
<br>
<p>Lourival
<br>
<p>2007/10/22, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2007, at 6:44 PM, Lourival Mendes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Hy everybody, I'm interested in use the MPI on the Pascal
</span><br>
<span class="quotelev2">&gt; &gt; environment. I tryed the MPICH2 list but no success. On the Free
</span><br>
<span class="quotelev2">&gt; &gt; Pascal Compiler list, Dani&#235;l invited me to subscribe this list and
</span><br>
<span class="quotelev2">&gt; &gt; open a discussion on the interface of OpenMPI for Pascal.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Probably as Dani&#235;l knows there is almost no reference on the MPI
</span><br>
<span class="quotelev2">&gt; &gt; for Pascal interface, only some very few tryes, one of them in
</span><br>
<span class="quotelev2">&gt; &gt; Russian.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I would like to know if there is someone working on the interface
</span><br>
<span class="quotelev2">&gt; &gt; of OpenMPI for Pascal?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was a mail or two about it a while ago; you might want to dig
</span><br>
<span class="quotelev1">&gt; through the OMPI list archives.  The short version is that none of
</span><br>
<span class="quotelev1">&gt; the current Open MPI members have a desire to add Pascal bindings to
</span><br>
<span class="quotelev1">&gt; MPI.  It also might be somewhat of an uphill battle to convince the
</span><br>
<span class="quotelev1">&gt; old-school MPI'ers to include a Pascal interface in Open MPI, even if
</span><br>
<span class="quotelev1">&gt; it was developed by a 3rd party and contributed to the project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, that should not deter you from pursuing a Pascal interface
</span><br>
<span class="quotelev1">&gt; if you want one.  Traditionally, extensions to MPI have been
</span><br>
<span class="quotelev1">&gt; implemented in an MPI-neutral fashion and released into the wild as
</span><br>
<span class="quotelev1">&gt; 3rd party libraries (such as the C++ bindings for MPI several years
</span><br>
<span class="quotelev1">&gt; ago).  The Pascal bindings likely don't need to know anything about
</span><br>
<span class="quotelev1">&gt; the internals of an MPI implementation -- they can just call the C
</span><br>
<span class="quotelev1">&gt; bindings.  So it's possible/likely that you would write up a Pascal
</span><br>
<span class="quotelev1">&gt; interface that would work with both Open MPI and MPICH (and any other
</span><br>
<span class="quotelev1">&gt; MPI's out there).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I typed out the above, I have a dim recollection of the Pascal
</span><br>
<span class="quotelev1">&gt; interface needing to obtain the values of the C constants during its
</span><br>
<span class="quotelev1">&gt; setup/compilation phase (note that these values are going to be
</span><br>
<span class="quotelev1">&gt; different between different MPI implementations).  You have a few
</span><br>
<span class="quotelev1">&gt; options here; you could write a parser for mpi.h to extract the
</span><br>
<span class="quotelev1">&gt; values you need (e.g., in perl or somesuch) or write a short C
</span><br>
<span class="quotelev1">&gt; program to extract them and printf the values that you capture into a
</span><br>
<span class="quotelev1">&gt; Pascal header file or something (I'm not sure if you need the literal
</span><br>
<span class="quotelev1">&gt; or symbolic values -- I remember very little of Pascal).  Either way,
</span><br>
<span class="quotelev1">&gt; with a little diligence and creativity, it could probably be done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Also I'm putting a very newbie question: What is the main
</span><br>
<span class="quotelev2">&gt; &gt; difference between the OpenMPI and MPICH ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short version: we're different projects implementing the same API
</span><br>
<span class="quotelev1">&gt; standard.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Lourival J. Mendes Neto
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>In reply to:</strong> <a href="4268.php">Jeff Squyres: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4274.php">Daniël Mantione: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
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
